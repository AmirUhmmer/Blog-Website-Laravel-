<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class userPosts extends Controller
{
    public function displayUserPosts (){

        if (auth()->user()->username == 'admin'){
            return redirect('admin');
        }

        $userPosts = Posts::where('deleted', '0')
                            ->where('username', auth()->user()->username)
                            ->orderBy('created_at', 'desc')
                            ->paginate(6);
        
        return view('user_profile', 
        ['posts' => $userPosts,]);
    }

    public function displayuserPostsAdmin (){

        if (auth()->user()->username != 'admin'){
            return redirect('user_profile');
        }

        $userPosts = Posts::where('deleted', '0')
                    ->orderBy('created_at', 'desc')
                    ->paginate(6);
        
        return view('admin_dashboard', 
        ['posts' => $userPosts,]);
    }
}
