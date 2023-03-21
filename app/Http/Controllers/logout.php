<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logout extends Controller
{
    public function logoutUser(){
        session()->forget('username');
        return redirect('/index');
    }
}
