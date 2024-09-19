<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::resource(name: 'recipe', controller: RecipeController::class);
