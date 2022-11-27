@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3> Customer Queries
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordererd table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Query</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($queries as $query)
                                <tr>
                                    <td>{{ $query->name }}</td>
                                    <td>{{ $query->email }}</td>
                                    <td>{{ $query->queries }}</td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
