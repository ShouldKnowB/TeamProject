@extends('layouts.app')

@section('title', 'Cart')

@section('content')
<div class = "cartpage">
    <h4> My Cart </h4>
    <hr>
    <div class ="row">
        <div class = "col-md-12">
            <div class="cartproducts">

                <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Products</h4>
                        </div>
                        <div class="col-md-2">
                            <h4>Price</h4>
                        </div>
                        <div class="col-md-2">
                            <h4>Quantity</h4>
                        </div>
                        <div class="col-md-2">
                            <h4>Remove</h4>
                        </div>
                    </div>
                </div>

                <div class="cart-item">
                        <div class="row">
                            <div class = "col-md-6">
                                <h2>...</h2>
                            </div>
                            <div class="col-md-2">
                                <h2>...</h2>
                            </div>
                            <div class="col-md-2">
                                <h2>...</h2>
                            </div>
                            <div class="col-md-2">
                                <h2>...</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>    
        </div>   
    </div>
<div>

@endsection