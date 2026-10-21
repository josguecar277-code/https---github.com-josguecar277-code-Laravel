<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// $posts = [
//     ["title" => "First Post"],
//     ["title" => "Second Post"],
//     ["title" => "Third Post"],
//     ["title" => "Fourt Post"],
// ];

// Route:: view('/blog','blog', ['posts => $posts'])->name('blog');
// Route::get('/blog' , function () {
//     $posts = [
//     ["title" => "First Post"],
//     ["title" => "Second Post"],
//     ["title" => "Third Post"],
//     ["title" => "Fourt Post"],
//     ["title" => "Other Post"],
// ];
// return view('blog', ['posts' => $posts]);
// })->name('blog');

 Route::get('/blog', [PostController::class, 'index'] )->name('blog');





// Route::get('/', function () {
//     return view('welcome');
// });

Route:: view('/','welcome');
Route:: view('/nosotros','about')->name('about');
// Route:: view('/blog','blog')->name('blog');
Route:: view('/contacto','contact')->name('contact');


// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();
// Route::match(['put', 'patch'], '/user/profile', function(

// });

// Route::any('/', function() 

// {

// });