@extends('layouts.app')

@section('content')
<div class="home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card text-light bg-dark">
                    <div class="card-header text-center "></div>
                    <div class="card-body">

                        <h1 class="text-center">Welcome,  {{ Auth::user()->name }}</h1>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card text-dark mt-3">
                            <div class="card-header text-center cardheader">
                                View Recent Orders
                            </div>
                            <div class="card-body d-flex justify-content-center">
                                    <button href="" class="orderbtn">My Orders</button>
                            </div>
                        </div>
                        <div class="card text-dark mt-3">
                            <div class="card-header text-center cardheader">
                                Your Information
                            </div>
                            <div class="card-body text-center">
                                    <p><div class="header">Name:</div> {{ Auth::user()->name }}</p>
                                    <p><div class="header">Email:</div>{{ Auth::user()->email }}</p>

                            </div>
                        </div>
                    <div class="loggedin">
                        <h4 class="text-center">{{ __('You are logged in!') }}</h4>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
