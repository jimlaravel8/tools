@extends('Admin.template.template')
@section('page_title')
Add User
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
    <h4>Add User</h4>
  </div>

  <div class="card-body shadow p-4 bg-light" >

<form method="POST" action="{{route('addUserPost')}}" class="">
  {{csrf_field()}}


 <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-file-signature"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
    <div class="input-field-custom margin-control-form form-left">
      <input type="text" class="" id="user_name" name="user_name"  placeholder="" required="true">
      <label for="user_name">User Name</label>
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
      <input type="email" class="" id="user_email" name="user_email"  placeholder="" required="true">
      <label for="user_email">Email</label>
     </div>
   </div>
  </div>
 </div>

 <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-file-signature"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
    <div class="input-field-custom margin-control-form form-left">
      <input type="password" class="" id="user_password" name="user_password"  placeholder="" required="true">
      <label for="user_password">User Password</label>
     </div>
   </div>
  </div>
 </div>

  <div class="form-group ">
  <div class="row ">
   <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-file-signature"></i></p>
   </div>

   <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
    <div class="form-group ">
      <label for="inputState">Access module</label>
      <select id="inputState" multiple class="form-control sel" name="access_select[]">
      <option value="product">Product Product</option>
      <option value="vendor">Vendor Module</option>
      <option value="category">Category Module</option>
      </select>
    </div>
   </div>
  </div>
 </div>



   

 


 
  <button type="submit" class=" custom-btn">Add User</button>
</form>
  </div>
</div>

</div>
@endsection