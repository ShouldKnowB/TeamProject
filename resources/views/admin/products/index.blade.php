@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 ">
        @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3> Products
                    <a href="{{ url('admin/products/create') }}" class="btn btn-primary btn-sm text-white float-end">
                        Add Products
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordererd table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $products as $product )
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>
                                @if ($product->category)
                                 {{$product->category->name}}
                                @else
                                  No Category
                                @endif
                            </td>

                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->status == '1' ? 'Hidden':'Visible'}}</td>
                            <td>
                                <a href="{{url('admin/products/'.$product->id.'/edit')}}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{url('admin/products/'.$product->id.'/delete')}}" onclick="return confirm('Are you sure, you want to delete this data?')" class="btn btn-sm btn-danger">
                                    Delete</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">No Products Available</td>
                        </tr>

                        @endforelse

                    </tbody>
                </table>

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