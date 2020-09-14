@extends('layouts.admin')

@section('content')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Categories Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

              @foreach ($categories as $category)
                  <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td><a href="/category/{{$category->id }}/edit"><button class="btn btn-primary">Edit</button></a>
                    &nbsp;&nbsp;
                    <a href="/category/destroy/{{ $category->id }}"><button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button></a>
                    </td>
                  </tr>

              @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection
