<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel= "stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}" />
    @livewireStyles
</head>
<body>
    <nav>
        <header class="header">
        <!-- Left Side Of Navbar -->
          <ul class="left">
            <li><a href="shop.php">SHOP</a></li>
            <li><a href="about-punch.php">ABOUT PUNCH</a></li>
            <li><a href="contact-us.php">CONTACT US</a></li>
        </ul>

        <p> <a href="{{ url('/') }}">
            <img class="logo" src="assets/images/logo(black).png" alt="logo">
        </a>
          </p>

          <div id="app">
        <!-- Right Side Of Navbar -->
          <ul class="right">
            <li><a href="#"><i class="fa-regular fa-user"></i></a>
            <li><a href="#"><i class="fa fa-magnifying-glass"></i></a></li>
            <li><a href="#"><i class="fa fa-basket-shopping"></i></a></li>
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
    <div class="dropdown">
        <button class="dropbtn"> <a >
            {{ Auth::user()->name }}
    </button>
          <i class="fa fa-caret-down"></i>
        </button></a>
        <div class="dropdown-content">
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

        </div>
      </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    </nav>
</div>
</li>
@endguest
</div>
</ul>
</header>



    <div class="main">
        @yield('content')
    </div>


   <!-- Scripts -->
   <!-- JS File Link -->
   <script src="js/script.js"></script>
   <script src="{{ assert('assets/js/jquery-3.6.1.min.js') }}"> </script>
   <script src="{{ assert('assets/js/bootstrap.bundle.min.js') }}"> </script>
   @livewireScripts


</body>
</html>
