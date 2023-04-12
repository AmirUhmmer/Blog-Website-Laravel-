<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Categories;

class AllPost extends Controller
{
    public function CategoriesBrowse()
    {
        $categories = Categories::orderBy('category')->paginate(6);
        foreach($categories as $category){
            if($category->category == 'All Blog'){
                $Stories = Posts::where('deleted', '0')->get();
                $StoriesCount = count($Stories);
                $category->setAttribute('StoriesCount', $StoriesCount);
            }
            else{
                $Stories = Posts::where('deleted', '0')
                                ->where('category', $category->category)
                                ->get();
                $StoriesCount = count($Stories);
                $category->setAttribute('StoriesCount', $StoriesCount);
            }
            
        }
        return view('browse', ['categories' => $categories]);
    }

    public function DisplayCategoriesPost($category){
        $categoryCheck = Posts::where('category', $category);
        if (!$categoryCheck->exists()) {
            //if $category does not exist in the "category" column of the "Posts" table
            if($category == 'All Blog'){
                $CategoriesPost = Posts::where('deleted', '0')
                                        ->orderBy('created_at', 'desc')
                                        ->paginate(3);
            }
            else{
                return view('errors.404');
            }
        }
        else{
            $CategoriesPost = Posts::where('deleted', '0')
                                    ->where('category', $category)
                                    ->orderBy('created_at', 'desc')
                                    ->paginate(3);
        }
        
        return view('post', ['postData' => $CategoriesPost], ['category' => $category]);
    }
}
