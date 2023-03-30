@extends('backend.master')

@section('content')


    <form action="{{route('Movie.store')}}" method="post" enctype="multipart/form-data">

        @if($errors->any())
            @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
            @endforeach
        @endif

            @if(session()->has('message'))
                <p class="alert alert-success">{{session()->get('message')}}</p>
            @endif

        @csrf
        <div class="form-group">
            <label for="name">Enter Movie Name</label>
            <input required name="name" type="text" class="form-control" id="name" placeholder="Enter Movie Name">
        </div>

            <div class="form-group">
                <label for="price">Enter Movie Ticket Price</label>
                <input required name="price" type="number" class="form-control" id="price" placeholder="Enter Movie Ticket Price">
            </div>
           

            <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" name="description" id=""></textarea>
        </div>

        <div class="form-group">
            <label for="">Select Status</label>
            <select name="status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

            <div class="form-group">
                <label for="">Select Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach($categories  as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>




        <div class="form-group">
            <label for="image">Upload Image</label>
            <input name="image" type="file" class="form-control" id="image">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection