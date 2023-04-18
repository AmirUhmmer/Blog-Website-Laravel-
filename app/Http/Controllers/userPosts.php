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

    public function displayuserPostsAdmin (Request $request){

        if (auth()->user()->username != 'admin'){
            return redirect('user_profile');
        }
        
        // dd(is_null($request->input('searchAdmin')));
        if($request->ajax()){
            $query = $request->get('query');
            dd($query);
        }
        else{
            $userPosts = Posts::where('deleted', '0')
            ->orderBy('created_at', 'desc')
            ->paginate(6);
            return view('admin_dashboard', 
                ['posts' => $userPosts,]);  
        }
        // else {
        //     $querySearch = $request->input('searchAdmin');
        //     $userPosts = Posts::where(function($query) use ($querySearch) {
        //         $query->where('title', 'like', '%'.$querySearch.'%')
        //             ->orWhere('category', 'like', '%'.$querySearch.'%')
        //             ->orWhere('username', 'like', '%'.$querySearch.'%')
        //             ->orWhere('content', 'like', '%'.$querySearch.'%');
        //     })
        //     ->where('deleted', '0')
        //     ->orderBy('created_at', 'desc')
        //     ->paginate(6);
        // }
        
        // return view('admin_dashboard', 
        // ['posts' => $userPosts,]);

        // if($query == null || $query == ''){
            //     $userPosts = Posts::where('deleted', '0')
            //             ->orderBy('created_at', 'desc')
            //             ->paginate(6);
                
            //     return view('admin_dashboard', 
            //             ['posts' => $userPosts,]);  
            // }
            // else {
            //     $querySearch = $request->input('searchAdmin');
            //     dd($querySearch);
            //     $userPosts = Posts::where(function($query) use ($querySearch) {
            //         $query->where('title', 'like', '%'.$querySearch.'%')
            //             ->orWhere('category', 'like', '%'.$querySearch.'%')
            //             ->orWhere('username', 'like', '%'.$querySearch.'%')
            //             ->orWhere('content', 'like', '%'.$querySearch.'%');
            //     })
            //     ->where('deleted', '0')
            //     ->orderBy('created_at', 'desc')
            //     ->paginate(6);
            //     return view('admin_dashboard', 
            //         ['posts' => $userPosts,]);  
            // }
    }
}
