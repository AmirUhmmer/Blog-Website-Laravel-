<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Controllers\SignIn;

class UserHeader extends Controller
{
    public function DisplayUserHeader(){
    $username = (isset($_SESSION['username']) ? Users::where('username', $_SESSION['username'])->get() : 'Login');
    return view('index')->with('username', $username);
    // $users = Users::where('username', $_SESSION['username'])->get();
    }
}
