<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserHeader extends Controller
{
    public function DisplayUserHeader(){
    $username = (isset($_SESSION['username']) ? Users::where('username', $_SESSION['username'])->get() : 'Login');
    dd($username);
    // $users = Users::where('username', $_SESSION['username'])->get();
    return view('index', ['users' => $username]);
    }
}
