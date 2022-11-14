<div class="row">
    <div class="col-md-12 ">
        @if (session('message'))
        <div class="alert alert-sucess">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3> Category
                    <a href="{{ url('admin/category/create') }}"
                        class="btn btn-primary btn-sm text-white float-end">
                        Add Category
                    </a>
                </h3>
            </div>
            <div class="card-body">
                    <table class="table table-boarderd table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                     <a href="{{url ('admin/category/'.$category->id.'/edit')}}"class="btn btn-success">Edit</a>
                                    <a href="#" wire:click="deleteCategory({{$category->id}})" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div> {{$categories->links()}}</div>

            </div>
        </div>
    </div>
</div>
