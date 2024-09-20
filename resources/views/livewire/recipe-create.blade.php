<div
    x-data
    x-on:recipe-created="$refs.modal.hidePopover()"
    >
    <button x-on:click.prevent="$refs.modal.showPopover()">Nouvelle recette</button>
    <div popover x-ref="modal">
        <button x-on:click="$refs.modal.hidePopover()">Annuler</button>
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
    </div>

</div>