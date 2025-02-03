<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-stone-50 selection:text-stone-800 selection:bg-stone-200">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('resources/favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::asset('resources/favicons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ Vite::asset('resources/favicons/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ Vite::asset('resources/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#00a300">
        <meta name="theme-color" content="#ffffff">

        <title>{{ $title }}</title>

        <meta name="keywords" content="Recipes, Vegan, Vegetarian, Cooking, No ads, Healthy" />
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="recipes.theoo.dev">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@theokbokki_">
        <meta name="twitter:creator" content="@theokbokki_">

        <meta name="description" content="A place to store stuff I cooked  and how I made it." />
        <meta property="og:url" content="{{ route('home') }}">
        <meta property="og:title" content="Theoo's recipes">
        <meta property="og:image" content="{{ Vite::asset('resources/img/card.jpg') }}">
        <meta property="og:description" content="A place to store stuff I cooked and how I made it.">
        <meta name="twitter:title" content="Theoo's recipes">
        <meta name="twitter:description" content="A place to store stuff I cooked and how I made it.">
        <meta name="twitter:image:src" content="{{ Vite::asset('resources/img/card.jpg') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="max-w-640 px-24 pt-80 h-screen mx-auto transition-all duration-300 border-stone-200 min-[672]:border-x" data-page="{{ $page }}">
        <script>document.body.classList.add('opacity-0', 'translate-y-16');</script>
        <main class="relative pb-80">
            {{ $slot }}
        </main>
    </body>
</html>
