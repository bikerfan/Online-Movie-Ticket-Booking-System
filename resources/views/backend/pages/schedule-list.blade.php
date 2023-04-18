@extends('backend.master')

@section('content')

    <h1>Category List</h1>


        <a href="{{route('create')}}" class="btn btn-success">
        Create New Movie Schedule
    </a>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Show Date</th>
            <th scope="col">Status</th>
            <th scope="col">Show Time</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>


        @foreach($time as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->date}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->time}}</td>
            <td>
                 <a href="" class="btn btn-primary">
                   View
                </a>
                <a href="{{route('delete',$data->id)}}" class="btn btn-danger">Delete</a>
                <a href="" class="btn btn-warning">Edit</a>

            </td>

        </tr>
        @endforeach


        </tbody>
    </table>


@endsection
