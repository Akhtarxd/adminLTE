<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emp Table</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
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
    
</body>
</html>