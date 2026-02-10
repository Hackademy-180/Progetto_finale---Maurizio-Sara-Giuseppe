<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ArticleForm extends Component
{
    #[Validate('required|min:5|max:24')]
    public $title;

    #[Validate('required|min:10|max:200')]
    public $description;

    #[Validate('required|numeric')]
    public $price;

    #[Validate('required')]
    public $category;

    public $article;

    public function save()
    {
        $this->validate();
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

    protected $messages = [

        'title.required' => 'Inserire un titolo!',
        'title.min' => 'Inserire almeno 5 caratteri per il titolo articolo.',
        'title.max' => 'Inserire massimo 25 caratteri per il titolo articolo.',

        'description.required' => 'Inserire una descrizione!',
        'description.min' => 'Inserire almeno 10 caratteri.',
        'description.max' => 'Inserire massimo 200 caratteri.',

        'price.required' => 'Inserire prezzo!',
        'price.numeric' => 'Inserire prezzo articolo in cifre.',

        'category.required' => 'Inserire una categoria!',
    ];
}
