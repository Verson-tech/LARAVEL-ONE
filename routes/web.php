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

// Route::resource('posts', PostsController::class);

// Route::get('/contact', [PostsController::class, 'contact']);

// Route::get('post/{id}/{name}/{password}', [PostsController::class, 'show_post']);

// Route::get('/insert', function(){
//     DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
// });

//Database Raw SQL Queries
// Route::get('/read', function(){
//     $results=DB::select('select * from posts where id = ?', 
//     //? is a placeholder for the value that will be passed in the array
//     [1]); 
//     //1 is the value that will be passed in the array
//     foreach($results as $post){
//         return $post->title;
// //title is the column name in the database
//     }
// });

Route::get('/read', function(){
    $results=DB::select('select * from posts');
    foreach($results as $post){
        return var_dump($results);
        //var_dump is used to display the array of objects in the database table posts 
    }
});
