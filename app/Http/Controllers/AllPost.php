<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class AllPost extends Controller
{
    public function DisplayAllPost(){
        $postData = Posts::where('deleted', '0')
                            ->orderBy('created_at', 'desc')
                            ->paginate(3);

        return view('post', ['postData' => $postData]);
    }
}
