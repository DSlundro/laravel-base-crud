<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand navbar-light bg-light d-flex justify-content-center">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="{{route('home')}}">Home <span class="visually-hidden">(current)</span></a>
                    <a class="nav-item nav-link" href="{{route('comics.index')}}">Comics</a>
                </div>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <!-- Scripts -->
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
