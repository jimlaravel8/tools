@extends('Admin.template.template')
@section('page_title')
Add Product
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
    <h4>Add Package</h4>
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
      <input type="text" class="" id="produtct_name" name="produtct_name"  placeholder="" required="true">
      <label for="produtct_name">Product Name</label>
     </div>
   </div>
  </div>
 </div>

  <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-user-tag"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
     <select id="product_category" name="product_category" class="form-mine ">
        <option >Product Category</option>
        <option value="#">Food</option>
        <option value="#">Vagitable</option>
      </select>
   </div>
  </div>
 </div>

  <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-search-dollar"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
    <div class="input-field-custom margin-control-form form-left">
      <input type="text" class="" id="product_price" name="product_price"  placeholder="" required="true">
      <label for="product_price">Product Price</label>
     </div>
   </div>
  </div>
 </div>

  <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-search-dollar"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
    <div class="input-field-custom margin-control-form form-left">
      <input type="text" class="" id="additional_price" name="additional_price"  placeholder="" required="true">
      <label for="additional_price">Product Additional Price</label>
     </div>
   </div>
  </div>
 </div>

 <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-file-alt"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
    <div class="input-field-custom margin-control-form form-left" style="padding-top:40px;">
      <input type="text" class="" id="package_price" name="package_price"  placeholder="" required="true">
      <label for="package_price">Product Description</label>
     </div>
   </div>
  </div>
 </div>






  <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="far fa-images"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >

    <div class="custom-file ">
    <input type="file" class="custom-file-input " id="product_image" name="product_image">
    <label class="custom-file-label" for="product_image">Product Image</label>

  </div>
   </div>
  </div>
 </div>
 
  
 

  <!-- <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-clipboard-check"></i></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >

   <div class="radio" style="border-bottom: 1px solid #288CF0 ; padding-bottom: 17px; margin-bottom:30px;">
   <div class="custom-control custom-checkbox ">
    <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
  </div>
   <div class="custom-control custom-checkbox custom-checkbox-inline">
    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
    <label class="custom-control-label" for="customCheck">Check this custom checkbox</label>
  </div>
  </div>  
   </div>
  </div>
 </div> -->

 
  <button type="submit" class=" custom-btn">Add Product</button>
</form>
  </div>
</div>

</div>
@endsection