<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
   return view('posts');
  
});

Route::get('/posts/{POST}', function () {
   ///$path=__DIR__."/../resources/posts/{}
    return view('posts2',[
       'varsk' => '<h1> ბოზებს სიცოცხლე </h1>'
    ]);
   
 });
