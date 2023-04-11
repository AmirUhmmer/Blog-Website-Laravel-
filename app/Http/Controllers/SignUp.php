<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\View\Components\index;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;


class SignUp extends Controller
{
    public function addUser(Request $request){
       Request()->validate([
            'username' => 'required|min:2|max:15|unique:users,username',
            'password' => 'required|min:8|max:50|same:password_verify',
            'password_verify' => 'required|min:8|max:50|same:password',

        ], [    
            'password.same' => 'The password verification field must match both password field.',
            'password_verify.same' => 'The password verification field must match both password field.',
        ]);

        $password = $request->input('password');
        $password_check = $request->input('password_verify');
        $username = $request->input('username');
        
        $passwordHashed = Hash::make($request->input('password'));
            
            
        $insertSuccess = Users::insert([
                'username'=>$username, 
                'user_password'=>$passwordHashed
        ]);

        if($insertSuccess){
                Alert::success('Success Title', 'Success Message');
                return redirect('/index')->with('success_signup', 'You have successfully signed up');
        }
        

        
    }
}
