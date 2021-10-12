<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\linksite;

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
    return view('home');
});

Route::get('/dashboard', [linksite::class,'dashboard']);

Route::get('/contact', [linksite::class,'contact']);

Route::get('/posts', [linksite::class,'posts']);

Route::get('/posts/{post}', function ($slug) {

    $path= __DIR__ ."/../resources/posts/{$slug}.html";

    $post = file_get_contents($path);
    return view('post',[
        'post' => $post
    ]);
});