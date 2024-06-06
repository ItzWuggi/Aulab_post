<?php

namespace App\Http\Controllers;

use App\Models\Article;

abstract class Controller
{
    public function homepage(){
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }
}
