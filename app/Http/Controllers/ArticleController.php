<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticleController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Blog',
            'posts' => Articles::all()
        ]);
    }

    public function show(Articles $articles)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $articles
        ]);
    }
}
