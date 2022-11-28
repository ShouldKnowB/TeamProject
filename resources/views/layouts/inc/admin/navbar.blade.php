<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand brand-logo" href="{{ url('admin/dashboard') }}">Aston Ecom</a>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-sort-variant"></span>
            </button>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
            <a href="{{ url('/') }}" class="btn btn-sm btn-dark">Visit Website</a>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">

                    <span class="nav-profile-name"> {{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">


                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout text-primary"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<!-- /***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 5: How to make admin logout system in laravel 9 for ecommerce>
*   Author: <Funda of Web IT>
*   Date: <26 May 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=kIyM4UUbKwM&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=9>
***************************************************************************************/ -->
