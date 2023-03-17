<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class AllPost extends Controller
{
    public function DisplayAllPost(){
        $postData = Posts::all();

        return view('post', ['postData' => $postData]);
    }
}
