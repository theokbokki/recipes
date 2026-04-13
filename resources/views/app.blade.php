<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script>document.documentElement.classList.add('js')</script>

        @viteReactRefresh
        @vite(['resources/js/app.jsx', 'resources/css/app.scss'])

        <x-inertia::head />
    </head>
    <body>
        <x-inertia::app />
    </body>
</html>
