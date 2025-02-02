<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="max-w-640 px-24 mt-80 mx-auto transition-all duration-300" data-page="{{ $page }}">
        <script>document.body.classList.add('opacity-0');</script>
        {{ $slot }}
    </body>
</html>
