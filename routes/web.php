<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShowPostSnippets;
use App\Http\Controllers\AllPost;
use App\Http\Controllers\FullStoryController;
use App\Http\Controllers\SignUp;
use App\Http\Controllers\SignIn;
use App\Http\Controllers\logout;
use App\Http\Controllers\userPosts;
use App\Http\Controllers\AddPost;
use App\Http\Controllers\EditPost;
use App\Http\Controllers\DeletePost;
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
    // if(session('username') != null){
    //     return redirect('/index');
    // }
    return view('login');
})->middleware('guest')->name('login');

Route::post('loginUser', [AuthController::class, 'login']);

Route::get('/signup', function() {
    // if(session('username') != null){
    //     return redirect('/index');
    // }
    return view('signup');
})->name('signup')->middleware('guest');

Route::post('insertUser', [SignUp::class, 'AddUser']);

Route::get('/full_story/{post_id}', [FullStoryController::class, 'DisplayFullStory'], function () {
    return view('/full_story')->with('post_id');
})->name('full_story');

Route::get('/user_profile', [userPosts::class, 'displayuserPosts'])->middleware('auth');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::post('/addPost', [AddPost::class, 'AddPostDB'])->middleware('auth');

Route::post('/editPost', [EditPost::class, 'UpdateDB'])->middleware('auth');

Route::get('/deletePost/{id}', [DeletePost::class, 'deleteDB'])->name('deletePost')->middleware('auth');
