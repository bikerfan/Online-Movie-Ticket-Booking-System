@extends('backend.master')

@section('content')
<h1 class="btn btn-warning">This is User Table</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $test)
    <tr>
      <th scope="row">{{$test->id}}</th>
      <td>{{$test->name}}</td>
      <td>{{$test->email}}</td>
      <td>{{$test->phone}}</td>
    </tr>
      @endforeach
   
  </tbody>
</table>
@endsection