<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class RecipesIndexController extends Controller
{
    public function __invoke(Request $request): Response
    {
        return Inertia::render('Recipes/Index', [
            'recipes' => Recipe::all(),
        ]);
    }
}
