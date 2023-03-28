<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleForm extends Component
{
    public $title;
    public $content;
    public function guardar()
    {
        $article = new Article;
        $article->title = $this->title;
        $article->content = $this->content;
        $article->save();
        session()->flash('status', 'Articulo creado');
        $this->redirectRoute('articles.home');
    }
    public function render()
    {
        return view('livewire.article-form');
    }
}
