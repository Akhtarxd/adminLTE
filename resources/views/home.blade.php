@extends('adminlayout')
  @section('contain')

              <!-- /.card-header -->
              <div class="card-body">
                @if (session('updateMessage'))
                  <div class="alert alert-success">
                    {{ session('updateMessage') }}
                  </div>
                @endif

                @if (session('errorMessage'))
                  <div class="alert alert-danger">
                    {{ session('errorMessage') }}
                  </div>
                @endif
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Company name</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th>Company url</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($companies as $company)
                  <tr>
                    <td>{{$company->id}}</td>
                    <td>{{$company->name}}</td>
                    <td>{{$company->email}}</td>
                    <td><img src="{{ asset('Complogo/' . $company->logo) }}" alt="Company Logo" width="50" height="50"></td>
                    <td>{{$company->company_url}}</td>
                    <td><a href="{{ route('company.edit', ['id' => $company->id]) }}" class="btn btn-primary">Edit</a>

                    <form action="{{ route('company.destroy', $company->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
             @endsection