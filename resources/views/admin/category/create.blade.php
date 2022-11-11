@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h3> Add Category
                    <a href ="{{url('admin/category/create')}}" class="btn btn-primary btn-sm text-white float-end">BACK</a>
                </h3>
            </div>
        <div class="card-body">
        <form action="{{url('admin/category')}}"  method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group row">

            <div class="col-sm-10">
                <label>Name</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="col-sm-10">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control"/>
            </div>
            <div class="col-sm-10">
                <label>Description</label>
                <textarea  name="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="col-sm-10">
                <label>Status</label><br/>
                <input type="checkbox" name="status" class="form-control"/>
            </div>
            <div class="col-sm-10">
                <label>Meta Title</label>
                <input type="text" name="meta_title" class="form-control"/>
            </div>
            <div class="col-sm-10">
                <label>Meta Keyword</label>
                <textarea  name="meta_keyword" class="form-control" rows="3"></textarea>
            </div>
            <div class="col-sm-10">
                <label>Meta Description</label>
                <textarea  name="meta_description" class="form-control" rows="3"></textarea>
            </div>

            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary float-end">Save</button>
            </div>

            </div>
        </form>
        </div>
        </div>
    </div>
</div>
@endsection
