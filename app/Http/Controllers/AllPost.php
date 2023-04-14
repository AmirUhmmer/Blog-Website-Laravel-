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
        $categoryCheck = Categories::where('category', $category);
        $authorCheck = Posts::where('username', $category)
                              ->where('deleted', '0');
        if (!$categoryCheck->exists()) {
            //if $category does not exist in the "category" column of the "Posts" table
                if (!$authorCheck->exists()) {
                    return view('errors.404');
                }
                else{
                    //for users who searched the author
                    $CategoriesPost = Posts::where('deleted', '0')
                                    ->where('username', $category)
                                    ->orderBy('created_at', 'desc')
                                    ->paginate(3);
                    // $category = $category."'s blog";

                   $category = '<span class=" decoration-light_blue hover:text-pink_red hover:underline transition-all duration-150">
                    '.$category.'&#39s <span class="text-pink_red underline decoration-light_blue hover:text-black dark:hover:text-white hover:no-underline">blogs</span>
                    </span>';
                }
        }
        else{
            if($category == 'All Blog'){
                $CategoriesPost = Posts::where('deleted', '0')
                                        ->orderBy('created_at', 'desc')
                                        ->paginate(3);
                $category = '<span class=" decoration-light_blue hover:text-pink_red hover:underline transition-all duration-150">
                    '.substr($category, 0, -5).' <span class="text-pink_red underline decoration-light_blue hover:text-black dark:hover:text-white hover:no-underline">blogs</span>
                    </span>';
                    
            }
            else{
                $CategoriesPost = Posts::where('deleted', '0')
                                    ->where('category', $category)
                                    ->orderBy('created_at', 'desc')
                                    ->paginate(3);
                $category = '<span class=" decoration-light_blue hover:text-pink_red hover:underline transition-all duration-150">
                    '.substr($category, 0, -5).' <span class="text-pink_red underline decoration-light_blue hover:text-black dark:hover:text-white hover:no-underline">blogs</span>
                    </span>';
            }
        }
        
        return view('post', ['postData' => $CategoriesPost], ['category' => $category]);
    }
}


