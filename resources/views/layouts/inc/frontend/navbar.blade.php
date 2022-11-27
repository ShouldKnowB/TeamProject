<nav>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
    </label>
    <ul class="left">
        <li><a href="{{ url('/store') }}">shop</a></li>
        <li><a href="{{ url('/about_us') }}">about punch</a></li>
        <li><a href="{{ url('/contact_us') }}">contact us</a></li>

    </ul>

    <p>
        <a href="{{ url('/') }}">
            <img class="logo" src="{{ asset('assets/images/logo(black).png') }}" alt="logo">
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
        @elseif(Auth::user()->role_as == '1')
            <li class="nav-item dropdown">
                <a href="{{ route('login') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Admin
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ url('admin/dashboard') }}">View Admin Dashboard</a></li>
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
        @else
            <li class="nav-item dropdown">
                <a href="{{ route('login') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{url('/home')}}"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="{{ asset('/order') }}"><i class="fa fa-list"></i> My Orders</a></li>
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

        @if (Auth::user())
            <li><a href="{{ asset('/cart') }}"><i class="fa fa-basket-shopping"></i></a></li>
        @else
            <li><a onclick="pleaseLogin()"><i class="fa fa-basket-shopping"></i></a></li>
            <script>
                function pleaseLogin() {
                    alert("Log in to view your basket!")
                }
            </script>
        @endif

    </ul>
</nav>
