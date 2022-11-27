@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            @if (session('message'))
                <h2 class="alert alert-success">{{ session('message') }},</h2>
            @endif
           <div class="me-md-3 me-xl-5">
            <h2>Dashboard, </h2>
            <p class="mb-md-0">Your analytics dashboard template.</p>
            <hr>
           </div>
           <div class="row">


            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <label>Total Categories</label>
                    <h1>{{$totalCategories}}</h1>
                    <a href="{{url('admin/orders')}}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <label>Total Products</label>
                    <h1>{{$totalProducts}}</h1>
                    <a href="{{url('admin/orders')}}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-body bg-info text-white mb-3">
                    <label>Total Categories</label>
                    <h1>{{$totalCategories}}</h1>
                    <a href="{{url('admin/orders')}}" class="text-white">view</a>
                </div>
            </div>


           </div>
           <hr>
           <div class="row">


            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label>Total All Users</label>
                    <h1>{{$totalAllUsers}}</h1>
                    <a href="{{url('admin/orders')}}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <label>Total Customers</label>
                    <h1>{{$totalUser}}</h1>
                    <a href="{{url('admin/orders')}}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <label>Total Admin</label>
                    <h1>{{$totalAdmin}}</h1>
                    <a href="{{url('admin/orders')}}" class="text-white">view</a>
                </div>
            </div>


           </div>
        </div>
    </div>
@endsection

<!-- /***************************************************************************************
*   Title: <Laravel 9 Ecommerce - Part 11: Product read, edit update and delete with images in laravel>
*   Author: <Funda of Web IT>
*   Date: <16 June 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=PhDkujgfa4Y&list=PLRheCL1cXHruG6bV4tAIF4AhkUMaABf3F&index=12>
*
***************************************************************************************/ -->
