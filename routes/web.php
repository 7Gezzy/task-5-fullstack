<?php

use App\Models\Post;
use App\Models\Articles;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

// Halaman Category
Route::get('/category', function () {
    return view('categories', [
        'title' => 'Articles Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'articles' => $category->articles,
        'category' => $category->name,
    ]);
});
// Halaman Articles
Route::get('/articles', [ArticleController::class, 'index']);
// Halaman Single Articles/Post
Route::get('articles/{articles:slug}', [ArticleController::class, 'show']);
