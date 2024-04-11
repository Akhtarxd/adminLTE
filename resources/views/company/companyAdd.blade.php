<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
<form method="post" enctype="multipart/form-data" action="{{route('CompanyStore')}}">
    <div class="container mt-5">
    @csrf
  <div class="mb-3">
    <label for="exampleCname" class="form-label">Company Name</label>
    <input type="text" class="form-control" name="CompName" id="exampleInputCname" aria-describedby="CnameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleCname" class="form-label">Company Email</label>
    <input type="email" class="form-control" name="CompEmail" id="exampleInputCname" aria-describedby="CnameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleCname" class="form-label">Company Logo</label>
    <input type="file" class="form-control" name="Complogo" id="exampleInputCname" aria-describedby="CnameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleCname" class="form-label">Company url</label>
    <input type="text" class="form-control" id="exampleInputCname" name="CompUrl" aria-describedby="CnameHelp">
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div> -->
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</body>
</html>