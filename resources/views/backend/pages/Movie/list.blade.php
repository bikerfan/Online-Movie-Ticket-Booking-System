@extends('backend.master')

@section('content')

    <h1>Movie List</h1>

    @if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
      @endif

    @if(session()->has('error'))
        <p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif

    <a href="{{route('Movie.create')}}" class="btn btn-primary" >Create New Movie</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category Name</th>
            <th scope="col">Status</th>
            <th scope="col">Schedule</th>
            <th scope="col">Duration</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($products  as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>

                <img width="100px" style="border-radius: 10px" src="{{url('/uploads/'.$data->image)}}" alt="Movie_image">
            </td>
            <td>{{$data->name}}</td>
            <td>{{$data->price}} BDT</td>
            <td>{{$data->categoryRelation->name}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->schedule}}</td>
            <td>{{$data->duration}}</td>
            <td>
                <a href="{{route('admin.Movie.view',$data->id)}}" class="btn btn-primary">View</a>
                <a href="{{route('Movie.edit',$data->id)}}" class="btn btn-info">Edit</a>
                <a href="{{route('admin.Movie.delete',$data->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
@endsection
