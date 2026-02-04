<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
// rotte articoli
Route::get('/create/article', [ArticleController::class, 'create'])->name('create_article');
