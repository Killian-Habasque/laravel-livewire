<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class RecipesList extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }  

    #[On('recipe-created')]
    public function render()
    {
        $recipes = Recipe::when($this->search, fn ($query) => $query->where('name', 'like', "%{$this->search}%"))->latest()->paginate(2);

        return view('livewire.recipes-list', [
            "recipes" => $recipes
        ]);
    }
}
