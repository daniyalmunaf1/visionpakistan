<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeactivateDays;
use App\Models\User;
use App\Models\Role;
use App\Models\PinRequest;
use App\Models\WithdrawalRequest;
use App\Models\TeamBonusRequest;
use App\Models\RewardBonusRequest;
use App\Models\TeamUser;
use App\Models\Pin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Validation\Rules;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $users = User::all();
        return view('index')->with('users',$users);

    }

    public function dashboard()
    {
        $users = User::all();
        $bank = User::where('id',1)->select('accountname','bankname','number')->first();
        $PinRequestCount = PinRequest::where('status',0)->count();
        $WithdrawalRequestCount = WithdrawalRequest::where('status',0)->count();
        $BonusRequestCount = TeamBonusRequest::where('status',0)->count();
        $RewardRequestCount = RewardBonusRequest::where('status',0)->count();
        $SilverusersCount = DB::table('role_user')
        ->where('role_id',2)
        ->join('users','users.id','=','role_user.id')
        ->where('password','!=',Null)
        ->count();
        $GoldusersCount = DB::table('role_user')
        ->where('role_id',3)
        ->join('users','users.id','=','role_user.id')
        ->where('password','!=',Null)
        ->count();
        $TotalusersCount = User::where('password','!=',NULL)->count()-1;
        $deactivate = DeactivateDays::where('id',1)->first();
        $days = $deactivate->days;
        $status = $deactivate->status;

        return view('admin.dashboard')->with([
            'users'=>$users,
            'bank'=>$bank,
            'PinRequestCount'=>$PinRequestCount,
            'WithdrawalRequestCount'=>$WithdrawalRequestCount,
            'BonusRequestCount'=>$BonusRequestCount,
            'RewardRequestCount'=>$RewardRequestCount,
            'SilverusersCount'=>$SilverusersCount,
            'GoldusersCount'=>$GoldusersCount,
            'TotalusersCount'=>$TotalusersCount,
            'days'=>$days,
            'status'=>$status
        ]);
    }

    public function usermanagement()
    {
        $users = User::where('password','!=',NULL)->where('id','!=',Auth::id())->get();
        $sno = 0;
        return view('admin.usermanagement')->with([
            'users'=>$users,
            'sno'=>$sno
        ]);

    }


    public function gotochangepassword()
    {
        return view('auth.change-password');
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {       
        if($user->hasRole('silver'))
        {
            $role = 'silver';
        }
        else if($user->hasRole('gold'))
        {
            $role = 'gold';
        }
        return view('admin.edituser')->with([
            'user'=>$user,
            'role'=>$role
        ]);

    }

    public function userDetails(User $user)
    {
        if(Auth::user()->hasRole('admin')){
            $roles = Role::all();
            return view('admin.user_detail')->with([
                'user'=>$user,
                'roles'=>$roles
            ]);
        }
        else
        {
            if($user->hasRole('student'))
            {
                $roles = Role::all();
                return view('admin.user_detail')->with([
                    'user'=>$user,
                    'roles'=>$roles
                ]);
            }
            else{
                return redirect()->route('index');

            }
        }
    }

    public function profile()
    {
        $roles = Role::all();
        $user = Auth::user();
        return view('profile')->with([
            'user'=>$user,
            'roles'=>$roles
        ]);
    }
    public function updatedays(Request $request)
    {
        $users = User::all();
        
        $days = DeactivateDays::where('id',1)->first();
        if($request->days>=$days->days)
        {
            $days->days = $request->days;
            $days->save();
            return redirect()->route('dashboard')->with('message', 'Deactivation Days Updated Successfully');  
        }
        else
        {
            $users = User::all();
            foreach($users as $user)
            {
                $user->lastuseradded = Carbon::now();
                $user->save();
            }
            $days->days = $request->days;
            $days->save();
            return redirect()->route('dashboard')->with('message', 'Deactivation Days Updated Successfully');  
        }
           
        
    }
    public function deactivatestatus()
    {
        
        $days = DeactivateDays::where('id',1)->first();
        if($days->status=='enabled')
        {
            $days->status = 'disabled';
            $days->save();
            return redirect()->route('dashboard')->with('message', 'Deactivation Disabled Successfully');   
        }
        else
        {
            $users = User::all();
            foreach($users as $user)
            {
                $user->lastuseradded = Carbon::now();
                $user->save();
            }
            $days->status = 'enabled';
            $days->save();
            return redirect()->route('dashboard')->with('message', 'Deactivation Enabled Successfully');   
        }
        
    }
    public function updatebankdetails(Request $request)
    {
        // dd('hello');
        $user = Auth::user();
        $user->number = $request->number;
        $user->accountname = $request->accountname;
        $user->bankname = $request->bankname;
        $user->save();
        return redirect()->route('dashboard')->with('message', 'Bank Details Updated Successfully');   
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($request->old_plan);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'bankname' => ['required', 'string', 'max:255'],
            'accountname' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:255'],
            'current_income' => ['required', 'numeric', 'max:100000000'],
            'reward_income' => ['required', 'numeric', 'max:100000000'],
            'total_income' => ['required', 'numeric', 'max:100000000'],
            'team_bonus' => ['required', 'numeric', 'max:100000000'],
            'level' => ['required', 'numeric', 'max:100000000'],
            'score' => ['required', 'numeric', 'max:100000000'],
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->accountname = $request->accountname;
        $user->bankname = $request->bankname;
        $user->level = $request->level;
        $user->score = $request->score;
        $user->current_income = $request->current_income;
        $user->reward_income =  $request->reward_income;
        $user->total_income =  $request->total_income;
        $user->team_bonus =  $request->team_bonus;
        $user->number = $request->number;
        if($request->role==$request->old_plan)
        {    
            // dd('same');
            $user->ref_email = $request->ref_email;
        }
        else if($request->role!=$request->old_plan)
        {    
            $user->ref_email = Null;
            // dd('change');
        }
        if($request->role=='silver')
        {    
            $user->roles()->sync(2);
        }
        else if($request->role=='gold')
        {     
            $user->roles()->sync(3);
        }
        $user->save();
        
        return  redirect()->route('usermanagement')->with('message', 'Details Updated Successfully');   
    }

    public function changePassword(Request $request, User $user)
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // $user->userid = Auth::user()->userid;
        // $user->six_digit_Id = Auth::user()->six_digit_Id;
        // $user->name = Auth::user()->name;
        // $user->email = Auth::user()->email;
        // $user->lock = Auth::user()->lock;
        // $user->number = Auth::user()->number;
        
        DB::table('users')
        ->where('id', Auth::user()->id)  // find your user by their email
        ->update(array('password' => Hash::make($request->password)));
        
        return redirect()->route('dashboard');
    }


    public function deactivateuser(User $user)
    {
        if($user->deactivate==1)
        {
            // dd('dectivated');
            $user->lastuseradded = Carbon::now();
            $user->deactivate = 0;
            $user->save();
            return redirect()->route('usermanagement')->with('message', 'User Activated Successfully');
        }
        else
        {
            $user->deactivate = 1;
            $user->save();
            return redirect()->route('usermanagement')->with('message', 'User Deactivated Successfully');
            // dd('activated',$user );

        }

        
    }
    public function pinrequest()
    {
        $sno = 0;
        $SilverPinRequests = PinRequest::where('status',0)
        ->where('plan','silver')
        ->join('users','users.id', '=', 'pin_requests.user_id')
        ->get(['users.name','users.email','pin_requests.trx_id','pin_requests.amount','pin_requests.number_of_pins','pin_requests.user_id','pin_requests.id']);

        $GoldPinRequests = PinRequest::where('status',0)
        ->where('plan','gold')
        ->join('users','users.id', '=', 'pin_requests.user_id')
        ->get(['users.name','users.email','pin_requests.trx_id','pin_requests.amount','pin_requests.number_of_pins','pin_requests.user_id','pin_requests.id']);
        // dd($PinRequests);
        return view('admin.pinrequest')->with([
            'SilverPinRequests'=>$SilverPinRequests,
            'GoldPinRequests'=>$GoldPinRequests,
            'sno'=>$sno
        ]);

    }
    public function sendpin(Request $request,$id,$user_id,$trx_id,$plan)
    {
        if(PinRequest::where('id',$id)->where('status',0)->first())
        {
            // dd($plan);
            $PinRequest = PinRequest::where('id',$id)->first();
            $PinRequest->status = 1;
            $PinRequest->save();
            // dd($request->number_of_pins);
            for($i=0;$i<$request->number_of_pins;$i++)
            {
                $pin = new Pin();
                $pin->user_id = $request->user_id;
                $pin->trx_id = $request->trx_id;
                if($plan=='silver')
                {
                    $pin->pin = random_int(100000, 999999);
                }
                else
                {
                    $pin->pin = random_int(10000000, 99999999);
                }
                $pin->save();
            }
            return Redirect()->back()->with('message', 'Pin Sent Successfully');   
        }
        else
        {
            return Redirect()->back()->with('message', 'Pin Sent Already');   
        }

    }
    public function withdrawalrequest()
    {
        $sno = 0;
        $SilverRequests = WithdrawalRequest::where('status',0)
        ->where('plan','silver')
        ->get();

        $GoldRequests = WithdrawalRequest::where('status',0)
        ->where('plan','gold')
        ->get();
        // dd($PinRequests);
        return view('admin.withdrawalrequest')->with([
            'SilverRequests'=>$SilverRequests,
            'GoldRequests'=>$GoldRequests,
            'sno'=>$sno
        ]);

    }
    public function rewardrequest()
    {
        $sno = 0;
        $SilverRequests = RewardBonusRequest::where('status',0)
        ->where('plan','silver')
        ->get();

        $GoldRequests = RewardBonusRequest::where('status',0)
        ->where('plan','gold')
        ->get();
        // dd($PinRequests);
        return view('admin.rewardrequest')->with([
            'SilverRequests'=>$SilverRequests,
            'GoldRequests'=>$GoldRequests,
            'sno'=>$sno
        ]);

    }
    public function withdrawdone(Request $request,$id,$user_id,$plan)
    {
        if(WithdrawalRequest::where('id',$id)->where('status',0)->first())
        {
            // dd($plan);
            $WithdrawRequest = WithdrawalRequest::where('id',$id)->first();
            $WithdrawRequest->status = 1;
            $WithdrawRequest->save();
            // dd($request->number_of_pins);
            $user = User::where('id',$user_id)->first();
                
            if($plan=='silver')
            {
                $user->current_income-=750;
                $user->total_income+=750;
            }
            else
            {
                $user->current_income-=4500;
                $user->total_income+=4500;
            }
            $user->save();
            
            return Redirect()->back()->with('message', 'Withdraw Done Successfully');   
        }
        else
        {
            return Redirect()->back()->with('message', 'Already Done');   
        }
    }
    public function rewarddone(Request $request,$id,$user_id,$reward,$plan)
    {
        if(RewardBonusRequest::where('id',$id)->where('status',0)->first())
        {
            // dd($plan);
            $RewardRequest = RewardBonusRequest::where('id',$id)->first();
            // if($RewardRequest->status == 0)
            // {
            $RewardRequest->status = 1;
            $RewardRequest->save();
            // dd($request->number_of_pins);
            $user = User::where('id',$user_id)->first();
                $user->current_income-=$reward;
                $user->reward_income+=$reward;
                $user->total_income+=$reward;
            $user->save();
            
            return Redirect()->back()->with('message', 'Reward Sent Successfully');
        }  
        else
        {
            return Redirect()->back()->with('message', 'Already Sent');
        }
    }
    public function teambonusrequest()
    {
        $sno = 0;
        $SilverRequests = TeamBonusRequest::where('status',0)
        ->where('plan','silver')
        ->get();

        $GoldRequests = TeamBonusRequest::where('status',0)
        ->where('plan','gold')
        ->get();
        // dd($PinRequests);
        return view('admin.teambonusrequest')->with([
            'SilverRequests'=>$SilverRequests,
            'GoldRequests'=>$GoldRequests,
            'sno'=>$sno
        ]);

    }
    public function bonusdone(Request $request,$id,$user_id,$plan)
    {
        // dd($plan);
        if(TeamBonusRequest::where('id',$id)->where('status',0)->first())
        {
            $TeamBonusRequest = TeamBonusRequest::where('id',$id)->first();
            $TeamBonusRequest->status = 1;
            $TeamBonusRequest->save();
            // dd($request->number_of_pins);
            $user = User::where('id',$user_id)->first();
                
            if($plan=='silver')
            {
                $user->current_income-=900;
                $user->team_bonus+=900;
                $user->total_income+=900;
            }
            else
            {
                $user->current_income-=1350;
                $user->team_bonus+=1350;
                $user->total_income+=1350;
            }
            $user->save();
            
            return Redirect()->back()->with('message', 'Bonus sent Successfully');   
        }
        else
        {
            return Redirect()->back()->with('message', 'Done Already');   
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
            $user->password = NULL;
            $user->save();
            return Redirect()->back()->with('message', 'User Account Deleted Successfully');   
        
        
    }
}
