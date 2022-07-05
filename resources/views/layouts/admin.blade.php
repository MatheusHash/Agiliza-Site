
<html lang="pt-br">
    <head>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{--        bootstrap5--}}
{{--        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">--}}


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>Agiliza Imóveis</title>

    </head>
    <body>
        @include('layouts.navigation')
        @yield('content')
    </body>
</html>
