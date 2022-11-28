@extends('layouts.app')

@section('title', 'My Order Details')

@section('content')

<div class="orders">
 <div class="py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg.white p-3">
                    <h4 class="fw-bold" >
                       My Order Details
                        <a href="{{url('order')}}" class="btn btn-danger btn-sm float-end">Back</a>
                    </h4>
                    <hr>
                    <div class="row">
                        <h6>Order Id: {{$order->id}} </h6>
                        <h6>Order Created Date: {{$order->created_at->format('d-m-Y h:i A')}}</h6>
                        <h6 class="border p-2 text-success">
                            Order Status: <span class="text-uppercase">{{$order->orderstatus}}</span>
                        </h6>
                    </div>
                    <br>
                    <h5>Order Items</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalPrice=0;
                                @endphp
                                @foreach ($order->all_orders as $orderItem)
                                <tr>
                                    <td width="10%">{{$orderItem->product->name}}</td>
                                    <td >£ {{$orderItem->price}}</td>
                                    <td>{{$orderItem->quantity}}</td>
                                    <td>£ {{$orderItem->quantity * $orderItem->price}}</td>
                                @php
                                    $totalPrice+=$orderItem->quantity * $orderItem->price;
                                @endphp

                                </tr>

                                @endforeach
                                <tr>
                                    <td colspan="3" class="fw-bold">Total Amount: </td>
                                    <td colspan="1" class="fw-bold">£{{$totalPrice}} </td>
                                </tr>
                            </tbody>

                        </table>

                    </div>


                </div>
             </div>
         </div>
        </div>
    </div>
</div>


@endsection
