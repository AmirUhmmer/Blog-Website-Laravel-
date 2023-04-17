<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Categories;

class SearchBar extends Controller
{
    public function Autofill(Request $request)
    {
        $searchResultTitle = null;
        $searchResult = null;
        $searchResultCategory = null;
        $searchResultAuthor = null;
        if($request->ajax()){
            $query = $request->get('query');

            if($query != null){
                $dataTitle = Posts::where('title', 'like', '%'.$query.'%')
                               ->where('deleted', '0')
                               ->orderBy('created_at', 'desc')
                               ->get();

                $dataCategory = Categories::where('category', 'like', '%'.$query.'%')
                               ->orderBy('created_at', 'desc')
                               ->get();

                $dataAuthor = Posts::where('username', 'like', '%'.$query.'%')
                               ->where('deleted', '0')
                               ->orderBy('created_at', 'desc')
                               ->take(1)
                               ->get();
            }

            $resultCountTitle = $dataTitle->count();
            $resultCountCategory = $dataCategory->count();
            $resultCountAuthor = $dataAuthor->count();
            if($resultCountTitle > 0){
                foreach ($dataTitle as $row) {
                    $searchResultTitle .= '
                    <li>
                        <a href="/full_story/'.$row->id.'"
                        class="block px-4 py-2 hover:cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">'.$row->title.'</a>
                    </li>';
                }
            }
            elseif($resultCountCategory > 0 ){
                foreach ($dataCategory as $row) {
                    $searchResultCategory .= '
                    <li>
                        <a href="/blogs/'.$row->category.'"
                        class="block px-4 py-2 hover:cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">'.$row->category.'</a>
                    </li>';
                }
            }
            elseif($resultCountAuthor > 0 ){
                foreach ($dataAuthor as $row) {
                    $searchResultAuthor .= '
                    <li>
                        <a href="/blogs/'.$row->username.'"
                        class="block px-4 py-2 hover:cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">'.$row->username.' (author) </a>
                    </li>';
                }
            }
            else{
                $searchResult .= '
                    <li>
                        <a class="block px-4 py-2 dark:hover:text-white">No results found.</a>
                    </li>';
            }

            $data = array(
                'searchResult' => (!is_null($searchResult) ? $searchResult : null),
                'searchResultTitle' => (!is_null($searchResultTitle) ? $searchResultTitle : null),
                'searchResultCategory' => (!is_null($searchResultCategory) ? $searchResultCategory : null),
                'searchResultAuthor' => (!is_null($searchResultAuthor) ? $searchResultAuthor : null),
            );
            echo json_encode($data);
        }
    }
}
