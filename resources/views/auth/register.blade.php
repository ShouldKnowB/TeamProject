@extends('layouts.app')

@section('content')
    <div class="register">
        <div class="content">
            <h1 class="title">{{ __('Register') }}</h1>

            <p> Please fill in the information below: </p>

            <div class="body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="name">
                        <input id="name" type="text" placeholder="Full Name"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>

            <div class="email">
                <input id="email" type="email" placeholder="Email Address"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="password">
                <input id="password" type="password" placeholder="Password"
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="confirm-password">
                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control"
                    name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="links">
            <div class="button">
                <button type="submit">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
        <p> Already Have An Account? <a href="{{ url('register') }}">Login!</a></p>
        </form>
    </div>
@endsection
