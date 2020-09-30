@extends('Admin.template.template')
@section('page_title')
Add Empolyee
@endsection

@section('main_content')

@if(session('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">

{{ session('message')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<div class="container px-5 mx-5 mt-3">
<div class="card ">
  <div class="card-header">
    <h4>Add Category</h4>
  </div>

  <div class="card-body shadow p-4 bg-light" >

<form method="" action="" class="">
  {{csrf_field()}}



 <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-file-signature"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
    <div class="input-field-custom margin-control-form form-left">
      <input type="text" class="" id="category_name" name="category_name"  placeholder="" required="true">
      <label for="category_name">Category Name</label>
     </div>
   </div>
  </div>
 </div>

   <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-lock"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
    <div class="input-field-custom margin-control-form form-left">
      <input type="text" class="" id="short_name" name="short_name"  placeholder="" required="true">
      <label for="short_name">Category Short Name</label>
     </div>
   </div>
  </div>
 </div>

  

   
 
  <button type="submit" class=" custom-btn">Add Category</button>
</form>
  </div>
</div>

</div>
@endsection