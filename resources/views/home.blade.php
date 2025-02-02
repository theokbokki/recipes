<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recipes</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="max-w-640 px-24 mt-80 mx-auto">
        <h1 class="text-xl bold">Recipes</h1>
        <div class="relative mt-40 flex flex-col" data-role="links-container">
            <span class="opacity-0 bg-stone-100/75 rounded-lg -left-12 -right-12 absolute transition-all -z-1" data-role="links-background"></span>
            @foreach($recipes as $recipe)
                <x-recipe-link :$recipe />
            @endforeach
        </div>
    </body>
</html>
