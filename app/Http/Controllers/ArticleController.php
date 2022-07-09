<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles', [
            'title' => 'Blog',
            'articles' => Articles::all()
        ]);
    }

    public function show(Articles $articles)
    {
        return view('article', [
            'title' => 'Single Article',
            'article' => $articles
        ]);
    }
}
