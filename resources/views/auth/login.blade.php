@extends('layouts.app')

@section('content')
    <div class="login-page">
        <div class="content">
            <h1 class="title">{{ __('Login') }}</h1>

            <p> Please enter your e-mail and password: </p>

            <div class="body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="email">
                        <input id="email" type="email" placeholder="Email Address"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>

            <div class="password">
                <input id="password" type="password" placeholder="Password"
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <!-- @if (Route::has('password.request'))
    @endif
                <a class="forgotten" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a> -->

        <div class="links">
            <div class="button">
                <button type="submit">
                    {{ __('Login') }}
                </button>
            </div>
        </div>
        <p> Don't have an account? <a href="{{ url('register') }}">Create one!</a></p>
        </form>
    </div>
@endsection
