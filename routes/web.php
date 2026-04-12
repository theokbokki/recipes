<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesIndexController;

Route::get('/', function () {
    return redirect('/recipes');
});

Route::get('/recipes', RecipesIndexController::class)->name('recipes.index');
