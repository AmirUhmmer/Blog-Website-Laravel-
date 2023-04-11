<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use RealRashid\SweetAlert\Facades\Alert;

class AddPost extends Controller
{
    public function AddPostDB (Request $request){

        $request->validate([
            'picture' => 'required|image',
            'title' => 'required|min:2|max:80',
            'content' => 'required|min:2',
            'category' => 'required'
        ]);

        $title = $request->input('title');
        $content = $request->input('content');
        $fileName = time().$request->file('picture')->getClientOriginalName();
        $current_timestamp = time();
        $current_date_time = date('Y-m-d H:i:s', $current_timestamp);
        $category = $request->input('category');

        $post = new Posts;
        if (auth()->user()->username == 'admin') {
            $post->username = 'Write Stuff';
        }
        else{
            $post->username = auth()->user()->username;
        }
        $post->title = $title;
        $post->content = $content;
        $post->picture = 'storage/pictures/' . $fileName;
        $post->category = $category;
        $post->created_at = $current_date_time;
        $addPostSuccess = $post->save();


        if($addPostSuccess){
            $request->file('picture')->storeAs('pictures', $fileName);
            Alert::success('Success Title', 'Success Message');
            if (auth()->user()->username == 'admin') {
                return redirect('admin')->with('success_add', 'Successfully added post');
            }
            else{
                return redirect('user_profile')->with('success_add', 'Successfully added post');
            }
        }
        else{
            return redirect('index');
        }
    }
} 
