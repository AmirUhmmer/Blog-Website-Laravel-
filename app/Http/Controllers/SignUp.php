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
        $password = $request->input('password');
        $password_check = $request->input('password_verify');
        $username = $request->input('username');
        $verify_username = Users::where('username', $username)->take(1)->get();
        if($password !=  $password_check){

            Alert::error('Error Title', 'Error Message');
            return redirect()->route('signup')->with('error', 'Make sure the password match');
        }
        elseif(!$verify_username->isEmpty()){
            Alert::error('Error Title', 'Error Message');
            return redirect()->route('signup')->with('error_username', 'Username taken');
        }
        else {
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
}
