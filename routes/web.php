<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get("/article/create", [ArticleController::class, "create"])->name("article.create")->middleware('auth');

Route::post("/article/store", [ArticleController::class, "store"])->name("article.store")->middleware('auth');

Route::get("/article/index", [ArticleController::class, "index"])->name("article.index");
