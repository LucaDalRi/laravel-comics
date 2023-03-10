<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 9 DC Comics</title>
        @vite('resources/js/app.js')
    </head>
    <body>

        <header>
            @yield('content-header')
        </header>

        <main>
            @yield('content-main')
        </main>

        <footer>
            @yield('content-footer')
        </footer>
        
    </body>
</html>