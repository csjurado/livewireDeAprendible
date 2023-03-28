<div>
    <h1> Formulario </h1>
    <form wire:submit.prevent="guardar">
        <label>
            <input wire:model="title" type="text" placeholder="Título">
        </label>
        <label>
            <textarea placeholder="Contenido"></textarea>
        </label>
        <input wire:model="content" type="submit" value="Guardar">
    </form>
</div>
