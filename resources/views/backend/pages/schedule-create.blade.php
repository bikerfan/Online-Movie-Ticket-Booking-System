@extends('backend.master')


@section('content')

<form action="{{route('store')}}" method="post">

    @if($errors->any())
    @foreach($errors->all() as $message)
    <p class="alert alert-danger">{{$message}}</p>
    @endforeach
    @endif

    @csrf
    <div class="form-group">
        <label for="name">Enter Show Date</label>
        <input required name="date" type="date" class="form-control" id="name" placeholder="Enter date ">
    </div>

    <div class="form-group">
        <label for="">Select Time</label>
        <select name="time" id="" class="form-control">
            <option value="9am-12pm">9am-12pm</option>
            <option value="3pm-6pm">3pm-6pm</option>
            <option value="7pm-10pm">7pm-10pm</option>

        </select>
    </div>
    <div class="form-group">
        <label for="">Select Seat</label>
        <select name="seat" id="" class="form-control">
        <option value="E Front">E Front</option>
        <option value="E Rear">E Rear</option>
        </select>
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