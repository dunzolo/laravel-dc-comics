<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Styles -->
        @vite('resources/js/app.js')
        <title>Laravel Comics</title>
    </head>
    <body>
        @include('partials.header')
        @include('partials.jumbotron')
        <main>
            @yield('content')
        </main>
        @include('partials.comics-links')
        @include('partials.footer')
    </body>
</html>