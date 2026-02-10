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
Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

// Mail
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');


