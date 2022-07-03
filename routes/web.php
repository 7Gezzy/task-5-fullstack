<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Articles;

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
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Galuh Abdilah S',
        'email' => 'galuhabdstr@gmail.com',
        'image' => ''
    ]);
});

Route::get('/posts', [ArticleController::class, 'index']);


// Halaman Single Article/Post
Route::get('posts/{slug}', [ArticleController::class, 'show']);
