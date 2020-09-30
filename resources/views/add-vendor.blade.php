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
    <h3>Add Vendor</h3>
  </div>
	<div class="card-body shadow-sm" >
<form method="POST" action="">
	{{csrf_field()}}
  <div class="form-group">
    <label for="vendor_name">Vendor Name</label>
    <input type="text" class="form-control" id="vendor_name" name="vendor_name"  placeholder="vendor name" required="true">
  </div>

   <div class="form-group">
    <label for="company_name">Company Name</label>
    <input type="text" class="form-control" id="company_name" name="company_name"  placeholder="company name" required="true">
  </div>



  <div class="form-group">
    <label for="moblie_number">Mobile Number</label>
    <input type="text" class="form-control" id="moblie_number" name="moblie_number" placeholder="mobile number" required="true">
  </div>

  <div class="form-group">
    <label for="email">Company Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="email">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" id="address" name="address" placeholder="address" required="true"></textarea>
  </div>

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>

 </div>
</div>
@endsection