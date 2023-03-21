<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowPostSnippets;
use App\Http\Controllers\AllPost;
use App\Http\Controllers\FullStoryController;
use App\Http\Controllers\SignUp;
use App\Http\Controllers\SignIn;
use App\Http\Controllers\logout;
use App\Http\Controllers\userPosts;
use App\Http\Controllers\AddPost;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'IndexContent'], function () {
    return view('index');
});


Route::get('/index', [HomeController::class, 'IndexContent'], function () {
    return view('index');
});

Route::get('/post', [AllPost::class, 'DisplayAllPost'], function () {
    return view('post');
});

Route::get('/login', function() {
    return view('login');
});

Route::post('loginUser', [SignIn::class, 'login'], function(){
});

Route::get('/signup', function() {
    return view('signup');
})->name('signup');

Route::post('insertUser', [SignUp::class, 'AddUser'], function(){
});

Route::get('/full_story/{post_id}', [FullStoryController::class, 'DisplayFullStory'], function () {
    return view('full_story/{post_id}');
})->name('full_story');

Route::get('/user_profile', [userPosts::class, 'displayuserPosts'], function () {
    
});

Route::get('/logout', [logout::class, 'logoutUser'], function () {
    
});

Route::post('/addPost', [AddPost::class, 'AddPostDB'], function () {
    
});

