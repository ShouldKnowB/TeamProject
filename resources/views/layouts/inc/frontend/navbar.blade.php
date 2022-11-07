<<<<<<< HEAD
<div class="navbar">

    <img class="background-image" src="assets/images/background-img.jpeg" type="image">

    <header class="header">
        <ul class="left">
            <li><a href="{{ route('shop') }}">shop</a></li>
            <li><a href="{{ route('about_us') }}">about punch</a></li>
            <li><a href="{{ route('contact_us') }}">contact us</a></li>
        </ul>

        <p>
            <a href="{{ url('/') }}">
                <img class="logo" src="assets/images/logo(black).png" alt="logo">
            </a>
        </p>

        <ul class="right">
            <li><a href="#"><i class="fa fa-basket-shopping"></i> Cart (0)</a></li>
            <form role="search">
                <div class="input-group">
                    <input type="search" placeholder="Search your product" class="form-control" />
                    <button class="btn bg-white" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
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
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ route('login') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user"></i> {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
            <li>

                <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                       <i class="fa fa-sign-out"></i>{{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </li>
            </ul>
        </li>
        @endguest
    </ul>
    </header>


</div>
=======

>>>>>>> 96a4c688a60881834f2fd14eb9eb87aa96649464
