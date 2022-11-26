<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title link rel='shortcut icon' href='public/favicon.ico' type='image/x-icon'>PUNCH</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome Link & Google Font Link-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@600&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



    <!-- CSS Styles -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- JS Alertify CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    @livewireStyles

</head>

<body>
    <div id="app">
        @include('layouts.inc.frontend.navbar')

        <main>
            @yield('content')
        </main>
    </div>
    @include('layouts.inc.frontend.footer')

    @livewireScripts
    <!-- JS File Links -->
    <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js')}}" type="module"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        window.addEventListener('message', event => {
            alertify.set('notifier', 'position', 'top-right');
            alertify.notify(event.detail.text, event.detail.type);
        });
    </script>


</body>

</html>

<!-- /***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 5: How to make admin logout system in laravel 9 for ecommerce>
*   Author: <Funda of Web IT>
*   Date: <26 May 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=kIyM4UUbKwM&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=9>
***************************************************************************************/ -->

<!-- /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce -Part 28: How to show success message in Livewire | Integrate Alertify JS in Laravel>
// *   Author: <Funda of Web IT>
// *   Date: <16 August 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: <https://www.youtube.com/watch?v=s-LW_HcpRg4&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=2>
// ***************************************************************************************/ -->
