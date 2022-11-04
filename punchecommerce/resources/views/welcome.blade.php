<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/js/app.js')
        <title>PUNCH</title>
        <link rel="icon" type="image/x-icon" href="{{url('assets/images/favicon.ico')}}">

        <!-- Fonts
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">-->
        <!-- Font Awesome Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url('assets/css/main.css') }}" />
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel= "stylesheet">

    </head>

      <body class="antialiased">

        <div class="navbar">


          <header class="header">
            <ul class="left">
              <li><a href="shop.php">SHOP</a></li>
              <li><a href="about-punch.php">ABOUT PUNCH</a></li>
              <li><a href="contact-us.php">CONTACT US</a></li>
            </ul>

            <p> <a href="index.php">
                <img class="logo" src="assets/images/logo(black).png" alt="logo">
              </a>
            </p>

            <ul class="right">
              <li><a href="#"><i class="fa-regular fa-user"></i></a>
              <li><a href="#"><i class="fa fa-magnifying-glass"></i></a></li>
              <li><a href="#"><i class="fa fa-basket-shopping"></i></a></li>
              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                    <button type="button" class="btn btn-light"><a href="{{ route('login') }}" class="">Login</button></a>
                    <!--<a href="{{ route('login') }}" class="fa-solid fa-right-to-bracket"></a>-->

                        @if (Route::has('register'))
                        <button type="button" class="btn btn-light"> <a href="{{ route('register') }}" class="">Register</button></a>
                            <!--<a href="{{ route('register') }}" class="">Register</a>-->
                        @endif
                    @endauth
                </div>
            @endif
            </ul>

          </header>


          <div class="content">
            <h1>ENERGISE</h1>
            <a href="shop.php">SHOP DRINKS</a>
          </div>

        </div>

        <section>
          <div class="container">
            <div class="drinks">
              <a href="#" data-title="Tropical"><img src=""></a>
              <a href="#" data-title="Tart Cherry"><img src=""></a>
              <a href="#" data-title="Berry Blast"><img src=""></a>
              <a href="#" data-title="Blue Raspberry"><img src=""></a>
              <a href="#" data-title="Drink #5"><img src=""></a>
              <a href="#" data-title="Drink #6"><img src=""></a>
            </div>
          </div>
        </section>

      </body>


</html>
