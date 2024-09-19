<div x-data="{ open: false }" x-on:click.away="open = false">
    <button x-on:click.prevent="open= ! open">Nouvelle recette</button>
    <dialog x-bind:open="open">
        <form wire:submit="create" method="post">
            @csrf
            <div>
                <input class="form-input" type="text" wire:model="name">
                @error('name')
                {{ $message }}
                @enderror
                <textarea wire:model="description">
                </textarea>
                @error('description')
                {{ $message }}
                @enderror
                <input type="number" wire:model="duration">
                @error('duration')
                {{ $message }}
                @enderror
            </div>
            <input type="submit">
        </form>
    </dialog>

</div>