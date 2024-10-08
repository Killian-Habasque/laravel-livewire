<div>
    <input type="text" name="search" wire:model.live="search">
    <table>
        <tr>
            <td>
                id
            </td>
            <td>
                Name
            </td>
            <td>
                Description
            </td>
            <td>
                Duration
            </td>
            <td>
                Created at
            </td>
        </tr>
        @foreach($recipes as $recipe)
        <tr wire:key="recipe-{{ $recipe->id }}">
            <td>
                {{$recipe->id}}
            </td>
            <td>
                {{$recipe->name}}
            </td>
            <td>
                {{ str($recipe->description)->words(4)}}
            </td>
            <td>
                {{$recipe->duration}}
            </td>
            <td>
                {{$recipe->created_at->diffForHumans()}}
            </td>
        </tr>
        @endforeach
    </table>
    {{ $recipes->links()}}
</div>