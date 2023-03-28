<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use App\Http\Controllers\UserHeader;
use Illuminate\Support\Facades\Auth;

class SignIn extends Controller
{
    public function login(Request $request){

        $credentials = Request()->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ], [    
            'username.exists' => 'The username does not exist',
        ]);

        $db_username =  Users::where('username', $credentials['username'])->first();

        if($db_username && Hash::check($credentials['password'], $db_username->user_password)){
            session(['username' => $credentials['username']]);
            Alert::success('Success Title', 'Success Message');
            return redirect('/index')->with('success_login', 'You have successfully signed in');
        }
        else {
            return back()->withErrors([
                'password' => 'The password is incorrect.',
            ]);
        }

        // $username = $request->input('username');
        // $password = $request->input('password');
        
        // $db_username =  Users::where('username', $username)->first();

        // if($db_username && Hash::check($password, $db_username->user_password)){
        //     $session_username =  Users::where('username', $username)->pluck('username')->first();
        //     session(['username' => $session_username]);
        //     Alert::success('Success Title', 'Success Message');
        //     return redirect('/index')->with('success_login', 'You have successfully signed in');
        // }
        // else {
        //     Alert::error('Error Title', 'Error Message');
        //     return redirect('login')->with('error_login', 'Wrong password or username');
        // }
    }
}
