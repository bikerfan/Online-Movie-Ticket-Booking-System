@extends('backend.master')


@section('content')

<form action="{{route('schedule.update', $schedule->id)}}" method="post">

    @if($errors->any())
    @foreach($errors->all() as $message)
    <p class="alert alert-danger">{{$message}}</p>
    @endforeach
    @endif

    @csrf
    <div class="form-group">
        <label for="name">Show Date</label>
        <input required name="date" type="date" value="{{$schedule->date}}" class="form-control" id="name" placeholder="Enter date ">
    </div>

    <div class="form-group">
        <label for="">Select Time</label>
        <select name="time" id="" class="form-control">
            <option value="9am-12pm" @if($schedule->time == '9am-12pm') Selected @endif >9am-12pm</option>
            <option value="3pm-6pm" @if($schedule->time == '3pm-6pm') Selected @endif>3pm-6pm</option>
            <option value="7pm-10pm" @if($schedule->time == '7pm-10pm') Selected @endif>7pm-10pm</option>

        </select>
    </div>
    <div class="form-group">
        <label for="">Select Seat</label>
        <select name="seat" id="" class="form-control">
        <option value="E Front" @if($schedule->seat == 'E Front') Selected @endif>E Front</option>
        <option value="E Rear" @if($schedule->seat == 'E Rear') Selected @endif>E Rear</option>
        </select>
    </div>

    <div class="form-group">
        <label for="">Select Status</label>
        <select name="status" id="" class="form-control">
            <option value="active" @if($schedule->status == 'active') Selected @endif>Active</option>
            <option value="inactive" @if($schedule->status == 'inactive') Selected @endif>Inactive</option>
        </select>
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection