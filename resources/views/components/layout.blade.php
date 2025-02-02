<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-stone-50 selection:text-stone-800 selection:bg-stone-200">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="max-w-640 px-24 pt-80 h-screen mx-auto transition-all duration-300 border-stone-200 min-[672]:border-x" data-page="{{ $page }}">
        <script>document.body.classList.add('opacity-0', 'translate-y-16');</script>
        <main class="relative">
            {{ $slot }}
        </main>
    </body>
</html>
