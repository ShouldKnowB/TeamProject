@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 ">
        @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3> Flavours List
                    <a href="{{ url('admin/flavours/create') }}" class="btn btn-primary btn-sm text-white float-end">
                        Add Flavour
                    </a>
                </h3>
            </div>
            <div class="card-body">
 <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Flavour Name</th>
            <th>Flavour Code</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
<tbody>
    @foreach ($flavours as $item)

    <tr>
        <td>{{$item->id }}</td>
        <td>{{$item->name }}</td>
        <td>{{$item->code }}</td>
        <td>{{$item->status ? 'Hidden':'Visible' }}</td>
        <td>
            <a href="{{ url ('admin/flavours/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
            <a href="{{ url('admin/flavours/'.$item->id.'/delete')}}" onclick="return confirm('Are you sure you want to delete this data?')"class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>

    @endforeach
</tbody>
 </table>
            </div>
        </div>
    </div>
</div>


@endsection
