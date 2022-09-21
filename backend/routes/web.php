<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#This is the default web route that open the welcome page of our laravel application 
Route::get('/', function () {
    return view('welcome');
});

#Create another route
Route::get('/hello', function(){
    return "Hello world!";
});

#Create a route that has a longer URI
Route::get('/hello/user', function(){
    return "Hello, This is a route!";
});

#Create a route that will accept parameter
Route::get('/user/{user_id}', function($user_id){
    return "This is user with id $user_id";
});

#Create a route that will accept multiple parameter
Route::get('/{username}/post/{post_id}', function($username, $post_id){
    return "Post $post_id. This is user with id $username";
});

#Crate route and give the route a name
Route::get('/dashbord/admin', function(){
    return "Welcome Admin!";
})->name('adm');

Route::get('/login', function(){
    return redirect()->route('adm');
});

#Create a rooute that will accss the method
#inside the PostController
Route::get('/post', [PostController::class, 'index']);

#Create a route that accept parameter
Route::get('/post/{post_id}', [PostController::class, 'viewPost']);

#create a route that will accept multiple parameters
Route::get('/post/{username}/{post_id}', [PostController::class, 'viewUserPost']);

#Activity1&2
Route::get('/show/{name}', [PostController::class, 'show']);

Route::get('/view-all', [PostController::class, 'viewAllPosts']);
Route::get('/view-post/{username}/{post_id}', [PostController::class, 'viewUserPost']);