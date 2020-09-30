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
    <h4>Add Employee</h4>
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
      <input type="text" class="" id="vendor_name" name="vendor_name"  placeholder="" required="true">
      <label for="vendor_name">Vendor Name</label>
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
      <input type="text" class="" id="company_name" name="company_name"  placeholder="" required="true">
      <label for="company_name">Company Name</label>
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
      <input type="text" class="" id="mobile_no" name="mobile_no"  placeholder="" required="true">
      <label for="mobile_no">Mobile Number</label>
     </div>
   </div>
  </div>
 </div>


  <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="far fa-envelope"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
    <div class="input-field-custom margin-control-form form-left">
      <input type="email" class="" id="email" name="email"  placeholder="" required="true">
      <label for="email"> Email</label>
     </div>
   </div>
  </div>
 </div>





   <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-calendar-alt"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
    <div class="input-field-custom margin-control-form form-left">
      <input type="text" class="test" id="date-time" name="emp_date"  placeholder="" required="true">
      <label for="date-time">Select Date</label>
     </div>
   </div>
  </div>
 </div>

  
 
  <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-restroom"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >

   <div class="radio" style="border-bottom: 1px solid #288CF0 ; padding-bottom: 17px; margin-bottom:30px;">
     <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
       <label class="custom-control-label" for="customRadio">Male</label>
     </div>
     <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
    <label class="custom-control-label" for="customRadio2">Female</label>
    </div>
  </div>  
   </div>
  </div>
 </div>

  <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="far fa-envelope"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
    <div class="input-field-custom margin-control-form form-left">
      <input type="text" class="" id="address" name="address"  placeholder="" required="true">
      <label for="address"> Address</label>
     </div>
   </div>
  </div>
 </div>


 
  <button type="submit" class=" custom-btn">Add Vendor</button>
</form>
  </div>
</div>

</div>
@endsection