<div>
    <h1> Lista de Articulos </h1>
    {{-- <h2> Categoria : {{ $category }} </h2> --}}
    {{-- <input wire:model = "category" type="text" placeholder="Categoria .."> --}}
    {{-- <input wire:model.lazy = "category" type="text" placeholder="Categoria .."> --}}
    {{-- <input wire:model.defer = "category" type="text" placeholder="Categoria .."> --}}
    <a href="{{ route('articles.create') }}"> Crear Articulo </a>
    <label>
        <input wire:model="buscar_1" type="search" placeholder="Buscar">
    </label>
    <ul>
        @foreach ($articles as $article)
            <li> {{ $article->title }}
        @endforeach
    </ul>
</div>
