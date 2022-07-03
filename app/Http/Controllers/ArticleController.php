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

    public function show($slug)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => Articles::find($slug)
        ]);
    }
}
