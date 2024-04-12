@extends('adminlayout')
  @section('contain')
  <div class="container mt-5">
@if(Session()->has('updateMessage'))
        <div class="alert alert-success alertMessage">
            {{session()->get('updateMessage')}}
        </div>
    @endif

<table class="table table-light table-hover">
  <thead>
    <tr>
        <th>S.no</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Company Id</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
        <a href="{{ route('emp.create') }}" class="btn btn-primary">Add Employee</a>
    </tr>
  </thead>
  <tbody>
  @foreach($employee as $employee)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$employee->first_name}}</td>
      <td>{{$employee->last_name}}</td>
      <td>{{$employee->company_id}}</td>
      <td>{{$employee->email}}</td>
      <td>{{$employee->phone}}</td>
      <td><a href="emp/{{$employee->id}}/edit" class="btn btn-primary">Edit</a>
        <a href="#" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
   @endsection 
