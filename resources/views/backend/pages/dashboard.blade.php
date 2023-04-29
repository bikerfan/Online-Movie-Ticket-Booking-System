@extends('backend.master')


@section('content')

<div class="row ">
    <div class="col-sm-3">
        <div class="card text-dark bg-info mb-3 p-4" style="max-width: 18rem;">
            <div class="card-body">
                <h5 class="card-title fs-5 fw-semibold">Total Movie</h5>
                <p class="card-text fw-bold fs-5 text-dark ">{{$totalmovie}}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card text-dark bg-info mb-3 p-4" style="max-width: 18rem;">
            <div class="card-body">
                <h5 class="card-title fs-5 fw-semibold">Total user</h5>
                <p class="card-text fw-bold fs-5 text-dark ">{{$totaluser}}</p>
            </div>
        </div>
    </div>
</div>
<br>
<div>
    <h1 class="btn btn-success">Totalmovie:{{$totalmovie}}</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Movie Name</th>

            </tr>
        </thead>
        <tbody>

            @foreach($post as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>

                <td>{{$data->name}}</td>


            </tr>
            @endforeach

        </tbody>
    </table>
</div>
<br>
<div>
    <h1 class="btn btn-success">TotalUser:{{$totaluser}}</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User Name</th>
                <th scope="col">User Email</th>

            </tr>
        </thead>
        <tbody>
        @foreach($test as $man)

            <tr>
                <th scope="row">{{$man->id}}</th>
                <td>{{$man->name}}</td>
                <td>{{$man->email}}</td>


            </tr>
@endforeach
        </tbody>
    </table>

</div>
<br>



@endsection