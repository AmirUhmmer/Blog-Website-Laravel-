<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class SearchPage extends Controller
{
    public function searchPageResults(Request $request)
    {
        $querySearch = $request->input('search');
        $searchData = Posts::where(function($query) use ($querySearch) {
            $query->where('title', 'like', '%'.$querySearch.'%')
                  ->orWhere('category', 'like', '%'.$querySearch.'%')
                  ->orWhere('username', 'like', '%'.$querySearch.'%')
                  ->orWhere('content', 'like', '%'.$querySearch.'%');
        })
        ->where('deleted', '0')
        ->orderBy('created_at', 'desc')
        ->get();

        return view('search', ['searchData' => $searchData], ['userSearched' => $querySearch]);
    }
}
