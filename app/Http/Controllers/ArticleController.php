<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ArticleController extends Controller implements HasMiddleware
{
    public static function middleware():array
    {
        return[
            new Middleware("auth", only:["create"]),
        ];
    }

    public function create()
    {
        return view("article.create");
    }

    public function index()
    {
        $articles=Article::orderBy("created_at", "desc")->get();
        return view("article.index", compact("articles"));
    }

    public function show(Article $article)
    {
        return view("article.index", compact("article"));
    }
}
