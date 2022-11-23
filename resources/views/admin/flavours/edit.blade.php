@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h3> Edit Flavour
                    <a href="{{ url('admin/flavours') }}" class="btn btn-danger btn-sm text-white float-end">
                        Back
                    </a>
                </h3>
            </div>
            <div class="card-body">
            <form action="{{ url('admin/flavours/'.$flavours->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                    <label>Flavour Name</label>
                    <input type="text" name="name" value="{{ $flavours->name }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Flavours Code</label>
                    <input type="text" name="code" value="{{ $flavours->code }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Status</label><br/>
                    <input type="checkbox" name="status"{{ $flavours->status ? 'checked':''}}/> Checked=Hidden,UnChecked=Visible
                </div>
                <div class="mb-3">
                    <button type="submit"class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

@endsection
