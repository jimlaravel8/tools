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
	<div class="card-body shadow-sm" >
<form method="POST" action="">
	{{csrf_field()}}
  <div class="form-group">
    <label for="product_name">Product Name</label>
    <input type="text" class="form-control" id="product_name" name="product_name"  placeholder="product name" required="true">
  </div>

  <div class="form-group">
    <label for="product_name">Product Category</label>
    <select class="form-control" required="true">
      <option>select category</option>
      <option>Food</option>
      <option>Vagitables</option>
    </select>
  </div>

  <div class="form-group">
    <label for="product_price">Product Price</label>
    <input type="text" class="form-control" id="product_price" name="product_price" placeholder="price" required="true">
  </div>

  <div class="form-group">
    <label for="product_desc">Product Additional Price</label>
    <input type="text" class="form-control" id="product_desc" name="product_desc" placeholder="additional price" required="true">
  </div>

  <div class="form-group">
    <label for="custom_id">Custom ID</label>
    <input type="text" class="form-control" id="custom_id" name="custom_id" placeholder="custom id" required="true">
  </div>

  <div class="form-group">
    <label for="product_img">Product Image</label>
    <input type="file" class="form-control-file" id="product_img" name="product_img" required="true">
  </div>

  <div class="form-group">
    <label for="product_desc">Product Description</label>
    <textarea class="form-control" id="product_desc" name="product_desc" placeholder="description" required="true"></textarea>
  </div>

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>

 </div>
</div>
@endsection