<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    

<form method="POST" action="{{route('emp.store')}}">
  @csrf
    <div class="container mt-5">
  <div class="mb-3">
    <label for="exampleInputFname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="name" name="fname">
  </div>
  <div class="mb-3">
    <label for="exampleInputLname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="Lname" name="lname" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="exampleInputLname" class="form-label">Company</label>
  <select class="form-select" id="inputCid" name="cId"
                                        aria-label="Default select example"
                                        required="">
    <option selected disabled>Select</option>
      @foreach($companies as $company)
        <option value="{{$company->id}}">{{$company->name}}</option>
      @endforeach

    </select>




    <!-- @foreach($companies as $company)
    <label for="exampleInputCname" class="form-label">Company ID</label>
    <input type="number" class="form-control" id="cID" name="cID">
  </div>
    @endforeach -->
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPhone" class="form-label">Phone</label>
    <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>

</body>
</html>