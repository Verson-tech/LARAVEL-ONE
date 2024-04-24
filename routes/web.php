<?php

// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "About page";
// });

// Route::get('/contact', function () {
//     return "Contact page";
// });

// //multiple parameters in the route
// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "This post id is " . $id . " and name is " . $name;
// });

// //naming routes
// Route::get('/admin/posts/example', array('as' => 'admin.home', function () {
//     $url = route('admin.home');
//     return "This url is " . $url;
// }));

// Route::get('/post/{id}', [PostsController::class, 'index']);

// Route::get('/about/{id}', [PostsController::class, 'show']);


Route::resource('posts', PostsController::class);
//resource method will create all the routes for the controller
//routes include index, create, store, show, edit, update, destroy