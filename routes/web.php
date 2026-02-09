<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
// rotte articoli
Route::get('/article/create', [ArticleController::class, 'create'])->name('create_article');
Route::get('/article/index', [ArticleController::class, 'index'])->name('index_article');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('show_article');
// categorie articoli
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');
// Ricefca articoli
Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');

//Rotta revisore 
Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');
