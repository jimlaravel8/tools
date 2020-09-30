@extends('template.template')

@section('title')
add product
@endsection

@section('mainContent')

@if(session('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">

{{ session('message')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<div class=" container">
	<div class="row">
		

<div class="card col-md-8 m-auto">
  <div class="card-header">
    <h3>Add Category</h3>
  </div>
	<div class="card-body shadow-sm" >
<form method="POST" action="">
	{{csrf_field()}}
  <div class="form-group">
    <label for="category_name">Category Name</label>
    <input type="text" class="form-control" id="category_name" name="category_name"  placeholder="category name" required="true">
  </div>

   <div class="form-group">
    <label for="category_short_name">Category Short Name</label>
    <input type="text" class="form-control" id="category_short_name" name="category_short_name"  placeholder="category short name" required="true">
  </div>



 

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>

 </div>
</div>
@endsection