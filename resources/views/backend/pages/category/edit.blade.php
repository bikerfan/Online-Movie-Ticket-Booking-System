@extends('backend.master')
@section('content')

    <form action="{{route('category.update', $category->id)}}" method="post">

        @if($errors->any())
            @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
            @endforeach
        @endif

        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input required name="name" value="{{ $category->name}}" type="text" class="form-control" id="name" placeholder="Enter Category Name">
        </div>

        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" name="description" id="">{{$category->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="">Select Status</label>
            <select name="status" id="" class="form-control">
                <option value="active" @if($category->status == 'active') Selected @endif>Active</option>
                <option value="inactive" @if($category->status == 'inactive') Selected @endif>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
