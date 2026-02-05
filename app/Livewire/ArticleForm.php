<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ArticleForm extends Component
{
    public $title;
    public $description;
    public $price;
    public $category;
    public $article;

    public function save()
    {
        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id(),
        ]);
        $this->reset();
        return redirect(route('create_article'))->with('status', 'Annuncio creato con successo');
    }

    public function render()
    {
        return view('livewire.article-form');
    }
}
