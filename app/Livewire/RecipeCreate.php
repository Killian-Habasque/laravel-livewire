<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class RecipeCreate extends Component
{
    public $name;
    public $description;
    public $duration;

    
    public function create()
    {
        $data = $this->validate([
            'name' => 'required',
            'description' => 'nullable|min:20',
            'duration' => 'nullable|integer|min:1|max:999'
        ]);
        $recipe = Recipe::create(attributes: $data);

        $this->dispatch('recipe-created');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.recipe-create');
    }
}
