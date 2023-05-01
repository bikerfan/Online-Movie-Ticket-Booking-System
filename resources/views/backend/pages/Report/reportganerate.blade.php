@extends('backend.master')


@section('content')
<h1 class="btn btn-primary">Create Report Form</h1>
<form action="{{route('generatereport')}}" >
    

    <div class="form-group">
        <label for="created_at">Data From</label>
        <input type="date" name="created_at" class="form-control" id="created_at" placeholder="Enter sale date from">
    </div>


    <div class="form-group">
        <label for="sell_to">Data To</label>
        <input type="date" name="sell_to" class="form-control" id="sell_to" placeholder="Enter sale date to">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

<h1>Report List</h1>
<table class="table">
    <thead class="thead-dark">
    <tr>
                <th scope="col">ID</th>
                <th scope="col">User Name</th>
                <th scope="col">Movie Name</th>
                <th scope="col">Total Sell</th>
                <th scope="col">Total Price</th>
            </tr>
    </thead>
    <tbody>
    @foreach($searchResult as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->user?->name}}</td>
                <td>{{$data->name}}</td>
                <td>{{$totalbooked}}</td>
                <td>{{$data->amount * $totalbooked}}</td>
            </tr>
            @endforeach

    </tbody>
</table>

@endsection