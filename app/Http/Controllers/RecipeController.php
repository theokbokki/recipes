<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Recipe $recipe)
    {
        $view = view('recipe', compact('recipe'));

        if ($request->ajax()) {
            return response()->json(['html' => $view->render()]);
        }

        return $view;
    }
}
