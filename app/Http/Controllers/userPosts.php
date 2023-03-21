<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class userPosts extends Controller
{
    public function displayUserPosts (){

        $userPosts = Posts::where('deleted', '0')->where('username', session('username'))->get();
        
        return view('user_profile', 
        ['posts' => $userPosts,]);
    }
}
