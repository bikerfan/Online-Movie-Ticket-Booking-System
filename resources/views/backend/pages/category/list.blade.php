@extends('backend.master')

@section('content')

    <h1>Category List</h1>


        <a href="{{route('category.create')}}" class="btn btn-success">
        Create New Movie Category
    </a>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>


        @foreach($cats as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->status}}</td>
            <td>
                <a href="{{route('category.edit', $data->id)}}" class="btn btn-info">Edit</a>
                <a href="{{route('category.destroy', $data->id)}}" class="btn btn-danger">Delete</a>
            </td>

        </tr>
        @endforeach


        </tbody>
    </table>
    {{$cats->links()}}


@endsection
