<div class="navbar">

    <header class="header">
        <ul class="left">
            <li><a href="{{ asset('/shop') }}">shop</a></li>
            <li><a href="{{ asset('/about_us') }}">about punch</a></li>
            <li><a href="{{ asset('/contact_us') }}">contact us</a></li>
        </ul>

        <p>
            <a href="{{ asset('/') }}">
                <img class="logo" src="assets/images/logo(black).png" alt="logo">
            </a>
        </p>

        <ul class="right">

            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a href="{{ route('login') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
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

            <li><a href="#"><i class="fa fa-basket-shopping"></i></a></li>

        </ul>
    </header>


</div>
