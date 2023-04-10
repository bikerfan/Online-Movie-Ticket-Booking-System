@extends('backend.master')

@section('content')
<h1>Update Movie</h1>
<form action="{{route('Movie.update',$product->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
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
        <input value="{{$product->name}}" required name="name" type="text" class="form-control" id="name" placeholder="Enter Movie Name">
    </div>

    <div class="form-group">
        <label for="price">Enter Movie Ticket Price</label>
        <input value="{{$product->price}}" required name="price" type="number" class="form-control" id="price" placeholder="Enter Movie Ticket Price">
    </div>

    <div class="form-group">
        <label for="name">Enter Movie Duration</label>
        <input required value="{{$product->duration}}" name="duration" type="text" class="form-control" id="name" placeholder="Enter Movie duration">
    </div>



    <div class="form-group">
        <label for="">Select Status</label>
        <select name="schedule" id="" class="form-control">
            <option @if($product->schedule=='9pm-12pm') selected @endif value="9pm-12pm">9pm-12pm</option>
            <option @if($product->schedule=='3pm-6pm') selected @endif value="3pm-6pm">3pm-6pm</option>
            <option @if($product->schedule=='7pm-10pm') selected @endif value="7pm-10pm">7pm-10pm</option>



        </select>
    </div>

    <div class="form-group">
        <label for="name">Description</label>
        <textarea class="form-control" name="description" id="">{{$product->description}}</textarea>
    </div>

    <div class="form-group">
        <label for="price">Enter Movie Director Names</label>
        <textarea class="form-control" name="director" id="">{{$product->director}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Select Status</label>
        <select name="status" id="" class="form-control">
            <option @if($product->status=='active') selected @endif value="active">Active</option>
            <option @if($product->status=='inactive') selected @endif value="inactive">Inactive</option>
        </select>
    </div>

    <div class="form-group">
        <label for="">Select Category</label>
        <select name="category_id" id="" class="form-control">
            @foreach($categories as $cat)
            <option @if($product->category_id==$cat->id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="image">Upload Image</label>
        <input name="image" type="file" class="form-control" id="image">
    </div>



    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection