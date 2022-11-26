@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3> Add Category
                        <a href="{{ url('admin/category') }}"
                            class="btn btn-primary btn-sm text-white float-end">BACK</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" />
                                @error('name') <small class ="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control" />
                                @error('slug') <small class ="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3"></textarea>
                                @error('description') <small class ="text-danger">{{$message}}</small> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Status</label><br>
                                <input type="checkbox" name="status"  />
                                @error('status') <small class ="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="col-md-12">
                                <h4>SEO Tags</h4>
                            <div class="col-md-6 mb-3">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" />
                                @error('meta_title') <small class ="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Keyword</label>
                                <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                                @error('meta_keyword') <small class ="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="3"></textarea>
                                @error('meta_description') <small class ="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">Save</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- /***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 6: Add Category in ecommerce with creating migration, model, controller>
*   Author: <Funda of Web IT>
*   Date: <28 May 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=D9QcZIhLSlA&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=10>
***************************************************************************************/ -->
<!-- 
/***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 7: Category View, edit update, confirm delete using Livewire in Laravel>
*   Author: <Funda of Web IT>
*   Date: <29 May 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=G6iJjxYWczA&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=11>
***************************************************************************************/
 -->

