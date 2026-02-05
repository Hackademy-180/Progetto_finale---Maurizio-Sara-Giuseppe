<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ArticleForm extends Component
{
    #[Validate('required|min:5')]
    public $title;
    #[Validate('required|min:10')]
    public $description;
    #[Validate('required|numeric')]
    public $price;
    public $category;
    #[Validate('required')]
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

    protected function messages(){
        return [
            'title.required' => 'Inserire un titolo.',
            'title.min' => 'Il titolo deve avere almeno 5 caratteri',
            'description.required' => 'Inserire una descrizione',
            'description.min' => 'La descrizione deve avere almeno 10 caratteri',
            'price.required' => 'Inserire un prezzo',
            'price.numeric' => 'Inserire un numero',
            'category.required' => 'Selezionare una categoria',
        ];
    }
}
