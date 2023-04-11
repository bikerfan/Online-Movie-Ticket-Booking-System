@extends('frontend.master')

@section('content')

<form>


        @csrf
        <div class="form-group">
            <label for="name">Enter Category Name</label>
            <input required name="category_name" type="text" class="form-control" id="name" placeholder="Enter Category Name">
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

       

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection