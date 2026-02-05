<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
// rotte articoli
Route::get('/article/create', [ArticleController::class, 'create'])->name('create_article');
Route::get('/article/index', [ArticleController::class, 'index'])->name('index_article');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('show_article');


