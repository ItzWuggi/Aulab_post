<?php

namespace App\Http\Controllers;

use App\Models\Article;

abstract class Controller
{
    public function welcome(){
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('articles'));
    }
}
