<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('assets/css/main.css') }}" rel= "stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel= "stylesheet">

    <!--@vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    @livewireStyles
</head>
<body>
    <div id="app">
        @include('layouts.inc.frontend.navbar')
        <main >
            @yield('content')
        </main>
        @include('layouts.inc.frontend.footer')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"> </script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"> </script>

    @livewireScripts
</body>
</html>
