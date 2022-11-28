@extends('layouts.admin')

@section('title', 'Order')

@section('content')

<div class="orders">
<div class="py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg.white p-3">
                    <h4 class="mb-4 fw-bold"> My Orders </h4>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($order as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->fullname}}</td>
                                    <td>{{$item->orderstatus}}</td>
                                    <td><a href="{{url('admin/orders/'.$item->id)}}" class="btn btn-primary btn-sm">View</a></td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">No Orders Available</td>
                                </tr>
                                @endforelse
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
