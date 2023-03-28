<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){

        $credentials = $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ], [    
            'username.exists' => 'The username does not exist',
        ]);

        $db_username =  Users::where('username', $credentials['username'])->first();

        if($db_username && Hash::check($credentials['password'], $db_username->user_password)){
            auth()->login($db_username);
            Alert::success('Success Title', 'Success Message');
            return redirect('/index')->with('success_login', 'You have successfully signed in');
        }
        else {
            return back()->withErrors([
                'password' => 'The password is incorrect.',
            ]);
        }
    }

    public function logout(Request $request){
        auth()->logout();
 
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
