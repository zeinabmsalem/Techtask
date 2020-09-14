@extends('layouts.admin')

@section('content')

{{  Form::open( array('route' => ['category.update', $category->id], 'method'=>'post', 'id'=>'quickForm') )  }}


                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}">
                  </div>

                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update Category</button>
                </div>

{{ Form::close() }}


@endsection
