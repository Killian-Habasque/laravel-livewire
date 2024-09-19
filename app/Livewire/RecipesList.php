<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class RecipesList extends Component
{
    use WithPagination;

    public function render()
    {
        $recipes = Recipe::latest()->paginate(2);

        return view('livewire.recipes-list', [
            "recipes" => $recipes
        ]);
    }
}
