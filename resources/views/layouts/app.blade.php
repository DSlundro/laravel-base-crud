<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC Comics - CRUD</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('partials.header')
        @include('partials.jumbotron')
        <main class="bg-dark">
            @yield('content')
        </main>
        @include('partials.cards')
        @include('partials.footer')
        <!-- Scripts -->
        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
