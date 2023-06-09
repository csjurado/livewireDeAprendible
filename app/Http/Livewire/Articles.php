<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Articles extends Component
{
    public $buscar_1 =" ";
    public function render()
    {
        return view('livewire.articles',[
            'articles'=>Article::where('title','like',"{$this->buscar_1}%")->get()
        ]);
    }
}
