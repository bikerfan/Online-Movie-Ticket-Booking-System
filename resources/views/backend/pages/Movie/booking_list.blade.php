@extends('backend.master')

@section('content')

<a href=""> </a>

    <h4>Booking List</h4>

 
    

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Movie Name</th>
            <th scope="col">User</th>
            <th scope="col">date</th>
            <th scope="col">Time</th>
            <th scope="col">No Of Ticket</th>
            <th scope="col">Seat</th>
            
        </tr>

        </thead>
        <tbody>
@foreach($movies as $data)
        
        <tr>
            <th scope="row">{{$data->id}}</th>
            

                
            <td>{{$data->name}}</td>
            <td>{{$data->user?->name}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->time}}</td>
            <td>{{$data->ticket}}</td>
            <td>{{$data->seat}}</td>
            <td>
                
            </td>
        </tr>
        @endforeach
        

        </tbody>
    </table>
@endsection
