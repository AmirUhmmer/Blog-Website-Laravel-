<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\View\Components\index;

class SignUp extends Controller
{
    public function addUser(Request $request){
        // $wholePost = Users::where('id', $request->input('username'))->get();
        $password = $request->input('password');
        $password_check = $request->input('password_verify');
        if($password !=  $password_check){
            $script = "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Password does not match',
                    })
                    document.getElementById('password').value = ''
                    document.getElementById('password1').value = ''
                  </script>";
            return view('signup', ['script' => $script]);
        }
        else {
            $username = $request->input('username');
            $passwordHashed = password_hash($request->input('password'), PASSWORD_DEFAULT);
            
            $insertSuccess = Users::insert([
                'username'=>$username, 
                'user_password'=>$passwordHashed
            ]);

            if($insertSuccess){
                return redirect('/index');
            }
        }
        

        
    }
}
