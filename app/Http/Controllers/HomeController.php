<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Users;

class HomeController extends Controller
{
    public function IndexContent(){
        // $data = Posts::query()->paginate(3);
        $data = Posts::where('deleted', '0')->get();
        $username = (isset($_SESSION['username']) ? Users::where('username', $_SESSION['username'])->get() : null);
        return view('index', 
        ['data' => $data,
         'users' => $username,
        ]);
    }
}
