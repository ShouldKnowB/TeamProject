@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center ">{{ __('Dashboard') }}</div>
                    <div class="card-body">

                        <h1 class="text-center">Welcome {{ Auth::user()->name }}</h1>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header text-center">
                                View Recent Orders
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                        <h4 class="text-center">{{ __('You are logged in!') }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
