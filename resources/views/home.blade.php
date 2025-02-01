<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recipes</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="w-640 mt-80 mx-auto">
        <h1 class="text-xl">Recipes</h1>
        <div>
            @foreach($recipes as $recipe)
            <p>{{ $recipe->title }}</p>
            @endforeach
        </div>
    </body>
</html>
