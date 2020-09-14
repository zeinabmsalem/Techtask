@extends('layouts.admin')

@section('content')

{{  Form::open( array('url' => action('CategoryController@store'), 'method'=>'post', 'id'=>'quickForm') )  }}


                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>

                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Add Category</button>
                </div>

{{ Form::close() }}


@endsection

@section('add_javascript')

<script>
	
	$('#quickForm').validate({
    rules: {
      category_name: {
        required: true
      },

    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });

</script>

@endsection