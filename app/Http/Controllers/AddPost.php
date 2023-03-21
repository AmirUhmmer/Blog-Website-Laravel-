<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class AddPost extends Controller
{
    public function AddPostDB (Request $request){
        $title = $request->input('title');
        $content = $request->input('content');
        $picture = $request->file('picture').time();
        $current_timestamp = time();
        $current_date_time = date('Y-m-d H:i:s', $current_timestamp);

        $addPostSuccess = Posts::insert([
            'username'=>session('username'),
            'title'=>$title,
            'content'=>$content,
            'picture'=>$picture,
            'created_at'=>$current_date_time
        ]);

        if($addPostSuccess){
            $path = $picture->storeAs();
        }
    }
}
