<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class FullStoryController extends Controller
{
    public $post_id;

    public function DisplayFullStory($post_id){
        if(session('username') == null){
            dd(session('username'));
            return redirect('/index');
        }
        $this->post_id = $post_id;
        $wholePost = Posts::where('id', $this->post_id)->get();
        return view('full_story', ['StoryInfo' => $wholePost]);
    }
}
