<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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
        return view('admin.index')->with('users',$users);

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
        if(Auth::user()->hasRole('admin')){
            $roles = Role::all();
            return view('admin.edit')->with([
                'user'=>$user,
                'roles'=>$roles
            ]);
        }
        else
        {
            if($user->hasRole('student'))
            {
                $roles = Role::all();
                return view('admin.edit')->with([
                    'user'=>$user,
                    'roles'=>$roles
                ]);
            }
            else{
                return redirect()->route('index');

            }
        }
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'email' => ['required', 'string', 'email', 'max:255']
        ]);
        if($request->profilepic != null)
        {
        $profilepic = app('App\Http\Controllers\UploadImageController')->storage_upload($request->profilepic,'/app/public/Users/Profile/');
            $user->profilepic = $profilepic;

        }
        $user->roles()->sync($request->roles);
        $user->name = $request->name;
        $user->number = $request->number;
        $user->save();
        
        return Redirect()->back()->with('message', 'Details Updated Successfully');   
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
        
        return redirect()->route('index');
    }


    public function lockuser(User $user)
    {
        if(Auth::user()->hasRole('admin')){
            if($user->lock==1)
            {
                $user->lock = 0;
                $user->save();
                return redirect()->route('index');
            }
            else
            {
                $user->lock = 1;
                $user->save();
                return redirect()->route('index');
            }
        }
        else
        {
            if($user->hasRole('student'))
            {
                if($user->lock==1)
                {
                    $user->lock = 0;
                    $user->save();
                    return redirect()->route('index');
                }
                else
                {
                    $user->lock = 1;
                    $user->save();
                    return redirect()->route('index');
                }
            }
            else{
                return redirect()->route('index');

            }
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
        if(Auth::user()->hasRole('admin')){
            $user->roles()->detach();
            $user->delete();
            return redirect()->route('index');
        }
        else
        {
            if($user->hasRole('student'))
            {
                $user->roles()->detach();
                $user->delete();
                return redirect()->route('index');
            }
            else{
                return redirect()->route('index');

            }
        }
    }
}
