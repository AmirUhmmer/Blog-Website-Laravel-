<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use RealRashid\SweetAlert\Facades\Alert;

class AddPost extends Controller
{
    public function AddPostDB (Request $request){
        $title = $request->input('title');
        $content = $request->input('content');
        $fileName = time().$request->file('picture')->getClientOriginalName();
        $current_timestamp = time();
        $current_date_time = date('Y-m-d H:i:s', $current_timestamp);

        $addPostSuccess = Posts::insert([
            'username'=>auth()->user()->username,
            'title'=>$title,
            'content'=>$content,
            'picture'=>'storage/pictures/'.$fileName,
            'created_at'=>$current_date_time
        ]);

        if($addPostSuccess){
            $request->file('picture')->storeAs('pictures', $fileName);
            Alert::success('Success Title', 'Success Message');
            return redirect('user_profile')->with('success_add', 'Successfully added post');
        }
    }
} 
