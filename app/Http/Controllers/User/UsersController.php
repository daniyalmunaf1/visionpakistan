<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\TeamUser;
use App\Models\Role;
use App\Models\Pin;
use App\Models\PinRequest;
use App\Models\SilverReward;
use App\Models\GoldReward;
use App\Models\WithdrawalRequest;
use App\Models\TeamBonusRequest;
use App\Models\RewardBonusRequest;
use App\Models\DeactivateDays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Carbon\Carbon;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function dashboard()
    {
        
        $sno=0;
        $users = User::all();
        $pins = Pin::where('user_id',Auth::user()->id)->count();
        $bank = User::where('id',1)->select('accountname','bankname','number')->first();
        $withdrawrequests = WithdrawalRequest::where('user_id',Auth::user()->id)->get();
        $rewardrequests = RewardBonusRequest::where('user_id',Auth::user()->id)->get();
        $teambonusrequests = TeamBonusRequest::where('user_id',Auth::user()->id)->get();

        return view('user.dashboard')->with([
            'users'=>$users,
            'bank'=>$bank,
            'withdrawrequests'=>$withdrawrequests,
            'rewardrequests'=>$rewardrequests,
            'teambonusrequests'=>$teambonusrequests,
            'pins'=>$pins,
            'sno'=>$sno
        ]);

    }

    // public function goldplan()
    // {
    //     $users = User::all();
    //     return view('user.goldplan')->with('users',$users);

    // }

    public function plan()
    {
        $users = User::all();
        return view('user.plan')->with('users',$users);

    }
    public function deactivate()
    {
        $deactivate = DeactivateDays::where('id',1)->first();
        $days = $deactivate->days;
        return view('user.deactivate')->with('days',$days);

    }
    public function planchange()
    {
        return view('user.changeplan');

    }
    

    public function viewpin()
    {
        $pins = DB::table('pins')
        ->where('user_id' , Auth::user()->id)
        ->get();
        $sno = 0;
        return view('user.viewpin')->with([
            'sno'=>$sno,
            'pins'=>$pins
        ]);

    }

    public function pinrequest()
    {
        $bank = User::where('id',1)->select('number')->first();
        return view('user.pinrequest')->with('bank',$bank);

    }
    public function pinrequeststore(Request $request)
    {
        $request->validate([
            'company_acc_number' => ['required', 'string', 'max:255'],
            'sender_acc_number' => ['required', 'string', 'max:255'],
            'trx_id' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'numeric', 'max:100000000'],
            'number_of_pins' => ['required', 'numeric', 'max:100000000'],
        ]);

        $pinrequest = new PinRequest();
        if(Auth::user()->hasRole('silver'))
        {
            $pinrequest->plan = 'silver';
        }
        else
        {
            $pinrequest->plan = 'gold';
        }
        $pinrequest->user_id = Auth::id();
        $pinrequest->sender_acc_number = $request->sender_acc_number;
        $pinrequest->company_acc_number = $request->company_acc_number;
        $pinrequest->trx_id = $request->trx_id;
        $pinrequest->amount = $request->amount;
        $pinrequest->number_of_pins = $request->number_of_pins;
        $pinrequest->status = 0;
        $pinrequest->save();
        return Redirect()->back()->with('message', 'Request sent Successfully');   
    }

    public function treeview()
    {
        $sno=0;
        $activeTeam = TeamUser::where('email',Auth::user()->email)
                ->where('status',0)
                ->first();

        $user = Auth::user();
        $score = $user->score;
        $level = $user->level;
        if(Auth::user()->hasRole('silver'))
        {
            $rScore = SilverReward::where('level',$level)->value('score');
            $target = SilverReward::where('level',$level)->first();

            $user->target = $target->score;
            $user->save();
            // $rTarget = SilverReward::where('level',$level+1)->value('score');
        //     if($score>=$rScore)
        //     {
        //         Auth::user()->level++;
        //         Auth::user()->target = $rTarget;
        //         dd($score,$level);
        //     }
        }
        else
        {
            $rScore = GoldReward::where('level',$level)->value('score');
            $target = GoldReward::where('level',$level)->first();

            $user->target = $target->score;
            $user->save();
            // if($score>=$rScore)
            // {
            //     dd('level up');
            // }
        }


        $TeamUsers = TeamUser::where('email',Auth::user()->email)
        ->where('status',1)
        ->get();
        foreach($TeamUsers as $TeamUser)
        {
            $TeamUser->score1 = User::where('email',$TeamUser->ref1)->value('score');
            $TeamUser->score2 = User::where('email',$TeamUser->ref2)->value('score');
            $TeamUser->score3 = User::where('email',$TeamUser->ref3)->value('score');
            $TeamUser->save();
        }
        // dd( 'hello');

        return view('user.treeview')->with([
            'activeTeam'=>$activeTeam,
            'TeamUsers'=>$TeamUsers,
            'score'=>$score,
            'rScore'=>$rScore,
            'sno'=>$sno
        ]);

    }
    public function submit($id)
    {
        if(TeamUser::where('id',$id)->where('status',0)->first())
        {
            $activeTeam = TeamUser::where('id',$id)->first();
            $activeTeam->status = 1;
            $activeTeam->save();

            Auth::user()->score++;

            $withdrawrequest = new WithdrawalRequest();
            $withdrawrequest->user_id = Auth::user()->id;
            $withdrawrequest->name = Auth::user()->name;
            $withdrawrequest->email = Auth::user()->email;
            $withdrawrequest->bankname = Auth::user()->bankname;
            $withdrawrequest->accountname = Auth::user()->accountname;
            $withdrawrequest->number = Auth::user()->number;
            $withdrawrequest->status = 0;

            if(Auth::user()->hasRole('silver'))
            {
                Auth::user()->current_income+=1050;
                $withdrawrequest->plan = 'silver';
                $message = 'Score Claimed Successfully, Rs.1050 has been added in your wallet';
            }
            else
            {
                Auth::user()->current_income+=5400;
                $withdrawrequest->plan = 'gold';
                $message = 'Score Claimed Successfully, Rs.5400 has been added in your wallet';
            }
            $withdrawrequest->save();
            Auth::user()->save();
            
            $ref_email = User::where('email',Auth::user()->email)->value('ref_email');
            for($ref_email;$ref_email!=NULL;)
            {
                $user = User::where('email',$ref_email)->first();
                $user->score++;
                $ref_email = $user->ref_email;
                $user->save();
            }
            return Redirect()->back()->with('message', $message);   
        }
        else
        {
            return Redirect()->back()->with('message', 'Already Claimed');   
        }
    }
    public function submitReward()
    {
        if(Auth::user()->hasRole('silver'))
        {
            if(Auth::user()->score>=SilverReward::where('level',Auth::user()->level)->value('score'))
            {
                $rewardbonusrequest = new RewardBonusRequest();
                $rewardbonusrequest->user_id = Auth::user()->id;
                $rewardbonusrequest->name = Auth::user()->name;
                $rewardbonusrequest->email = Auth::user()->email;
                $rewardbonusrequest->level = Auth::user()->level+1;
                $rewardbonusrequest->bankname = Auth::user()->bankname;
                $rewardbonusrequest->accountname = Auth::user()->accountname;
                $rewardbonusrequest->number = Auth::user()->number;
                $rewardbonusrequest->status = 0;

                $user = Auth::user();
                $score = $user->score;
                $level = $user->level;

                if(Auth::user()->hasRole('silver'))
                {
                    $_reward = SilverReward::where('level',$level)->first();
                    $reward = $_reward->reward;
                    $_rTarget = SilverReward::where('level',$level+1)->first();
                    $rTarget = $_rTarget->score;
                    // dd($rTarget);
                
                    Auth::user()->current_income+=$reward;
                    $rewardbonusrequest->reward = $reward;
                    $rewardbonusrequest->plan = 'silver';
                    $message = 'You are Upgraded to Level '.++$level.',Reward of Rs.'.$reward.' has been added in your wallet';
                    Auth::user()->level++;
                    Auth::user()->target = $rTarget;
                }
                else
                {
                    $_reward = GoldReward::where('level',$level)->first();
                    $reward = $_reward->reward;
                    $_rTarget = GoldReward::where('level',$level+1)->first();
                    $rTarget = $_rTarget->score;
                
                    Auth::user()->current_income+=$reward;
                    $rewardbonusrequest->reward = $reward;
                    $rewardbonusrequest->plan = 'gold';
                    $message = 'You are Upgraded to Level '.++$level.',Reward of Rs.'.$reward.' has been added in your wallet';
                    Auth::user()->level++;
                    Auth::user()->target = $rTarget;
                }
                $rewardbonusrequest->save();
                Auth::user()->save();
                
                
                return Redirect()->back()->with('message', $message); 
            }
            else
            {
                return Redirect()->back()->with('message', 'Already Claimed'); 
            }
        }
        if(Auth::user()->hasRole('silver'))
        {
            if(Auth::user()->score>=GoldReward::where('level',Auth::user()->level)->value('score'))
            {
                $rewardbonusrequest = new RewardBonusRequest();
                $rewardbonusrequest->user_id = Auth::user()->id;
                $rewardbonusrequest->name = Auth::user()->name;
                $rewardbonusrequest->email = Auth::user()->email;
                $rewardbonusrequest->level = Auth::user()->level+1;
                $rewardbonusrequest->bankname = Auth::user()->bankname;
                $rewardbonusrequest->accountname = Auth::user()->accountname;
                $rewardbonusrequest->number = Auth::user()->number;
                $rewardbonusrequest->status = 0;

                $user = Auth::user();
                $score = $user->score;
                $level = $user->level;

                if(Auth::user()->hasRole('silver'))
                {
                    $_reward = SilverReward::where('level',$level)->first();
                    $reward = $_reward->reward;
                    $_rTarget = SilverReward::where('level',$level+1)->first();
                    $rTarget = $_rTarget->score;
                    // dd($rTarget);
                
                    Auth::user()->current_income+=$reward;
                    $rewardbonusrequest->reward = $reward;
                    $rewardbonusrequest->plan = 'silver';
                    $message = 'You are Upgraded to Level '.++$level.',Reward of Rs.'.$reward.' has been added in your wallet';
                    Auth::user()->level++;
                    Auth::user()->target = $rTarget;
                }
                else
                {
                    $_reward = GoldReward::where('level',$level)->first();
                    $reward = $_reward->reward;
                    $_rTarget = GoldReward::where('level',$level+1)->first();
                    $rTarget = $_rTarget->score;
                
                    Auth::user()->current_income+=$reward;
                    $rewardbonusrequest->reward = $reward;
                    $rewardbonusrequest->plan = 'gold';
                    $message = 'You are Upgraded to Level '.++$level.',Reward of Rs.'.$reward.' has been added in your wallet';
                    Auth::user()->level++;
                    Auth::user()->target = $rTarget;
                }
                $rewardbonusrequest->save();
                Auth::user()->save();
                
                
                return Redirect()->back()->with('message', $message); 
            }
            else
            {
                return Redirect()->back()->with('message', 'Already Claimed'); 
            }
        }
    }
    public function submitteambonus($id)
    {
        $activeTeam = TeamUser::where('id',$id)->first();

        if($activeTeam->score1>=$activeTeam->level&&$activeTeam->score2>=$activeTeam->level&&$activeTeam->score3>=$activeTeam->level)
        {
            $activeTeam->level++;
            $activeTeam->save();


            $teambonusrequest = new TeamBonusRequest();
            $teambonusrequest->user_id = Auth::user()->id;
            $teambonusrequest->name = Auth::user()->name;
            $teambonusrequest->email = Auth::user()->email;
            $teambonusrequest->bankname = Auth::user()->bankname;
            $teambonusrequest->accountname = Auth::user()->accountname;
            $teambonusrequest->number = Auth::user()->number;
            $teambonusrequest->status = 0;

            if(Auth::user()->hasRole('silver'))
            {
                Auth::user()->current_income+=300;
                $teambonusrequest->plan = 'silver';
                $message = 'Bonus Claimed Successfully, Rs.300 has been added in your wallet';
            }
            else
            {
                Auth::user()->current_income+=450;
                $teambonusrequest->plan = 'gold';
                $message = 'Bonus Claimed Successfully, Rs.450 has been added in your wallet';
            }
            $teambonusrequest->save();
            Auth::user()->save();
            
            
            return Redirect()->back()->with('message', $message);   
        }
        else
        {
            return Redirect()->back()->with('message', 'Already Claimed');   
        }
    }

    public function treeviewgold()
    {
        return view('user.treeviewgold');

    }
    
    public function adduser()
    {
        return view('user.adduser');

    }

    public function addusergold()
    {
        return view('user.addusergold');

    }

    public function changeplan()
    {
        return view('user.changeplan');

    }

    public function paymenthistory()
    {
        return view('user.paymenthistory');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
