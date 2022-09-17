<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\TeamUser;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Carbon\Carbon;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $Team = TeamUser::where('email',$request->ref_email)
            ->where('status',0)
            ->where('ref1','!=',NULL)
            ->where('ref2','!=',NULL)
            ->where('ref3','!=',NULL)
            ->first();
        if($Team)
        {
            return Redirect()->back()->with('message', 'Kindly Submit The Remaining Score In TeamView First');   
        }
        else
        {
            if(Auth::user()->hasRole('silver'))
            {
                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'pin' => ['required', 'digits:6'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'bankname' => ['required', 'string', 'max:255'],
                    'accountname' => ['required', 'string', 'max:255'],
                    'accountnumber' => ['required', 'string', 'max:255'],
                    'password' => ['required', 'confirmed', Rules\Password::defaults()],
                ]);
            }
            else if(Auth::user()->hasRole('gold'))
            {
                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'pin' => ['required', 'digits:8'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'bankname' => ['required', 'string', 'max:255'],
                    'accountname' => ['required', 'string', 'max:255'],
                    'accountnumber' => ['required', 'string', 'max:255'],
                    'password' => ['required', 'confirmed', Rules\Password::defaults()],
                ]);
            }
            
            $pin = DB::table('pins')
            ->where('pin' , $request->pin)
            ->where('user_id' , Auth::user()->id)
            ->first();
            if($pin)
            {
                $user = new User();
                $user->pin = $request->pin;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->accountname = $request->accountname;
                $user->bankname = $request->bankname;
                $user->current_income = 0;
                $user->reward_income = 0;
                $user->total_income = 0;
                $user->team_bonus = 0;
                $user->level = 1;
                $user->score = 0;
                $user->deactivate = 0;
                $user->lastlogin = Carbon::now();
                if(Auth::user()->hasRole('silver'))
                {
                    $user->target = 45;
                }
                else if(Auth::user()->hasRole('gold'))
                {
                    $user->target = 35;
                }
                $user->number = $request->accountnumber;
                $user->ref_email = $request->ref_email;
                $user->password = Hash::make($request->password);
                $user->save();
                if(Auth::user()->hasRole('silver'))
                {
                    $role = Role::where('name','silver')->first();
                    $user->roles()->attach($role);
                }
                else if(Auth::user()->hasRole('gold'))
                {
                    $role = Role::where('name','gold')->first();
                    $user->roles()->attach($role);
                }
                DB::table('pins')
                ->where('pin' , $request->pin)
                ->where('user_id' , Auth::user()->id)
                ->delete();

                $activeTeam = TeamUser::where('email',$request->ref_email)
                ->where('status',0)
                ->first();
                // dd($activeTeam->ref2);
                if($activeTeam)
                {
                    if($activeTeam->ref1==NULL)
                    {
                        $activeTeam->ref1=$request->email;
                        $activeTeam->save();
                    }
                    else if($activeTeam->ref2==NULL)
                    {
                        $activeTeam->ref2=$request->email;
                        $activeTeam->save();
                    }
                    else if($activeTeam->ref3==NULL)
                    {
                        $activeTeam->ref3=$request->email;
                        $activeTeam->save();
                    }
                }
                else
                {
                    $newTeam = new TeamUser();
                    $newTeam->email = $request->ref_email;
                    $newTeam->ref1 = $request->email;
                    $newTeam->level = 1;
                    $newTeam->status = 0;
                    $newTeam->save();
                }
                Auth::user()->lastuseradded = Carbon::now();
                Auth::user()->save();
                return Redirect()->back()->with('message', 'Account Created Successfully');   
            }
            else
            {
                return Redirect()->back()->with('issue', 'Invalid Pin');   
            }
        }
        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
    
}
