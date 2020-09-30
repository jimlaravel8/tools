@extends('Admin.admin-lte')
@section('page_title')
Manage Stock
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<div class="container-fluid mt-2">

<div class="row mt-2">
    <div class="col-sm-2 "></div>

    <div class="col-sm-8">

<div class="card uper" style="margin-bottom:50px;">
  <div class="card-header">
      Create a User
      <a href="#" class="btn btn-sm btn-primary float-right">cancel</a>


  </div>

  <div class="card-body">
      
      <div class="row">
          <div class="col col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">
                  </div>

  <div class="panel-body">
      <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="uw2ht7ddg8zoe3RAeang9OAHUtL9lyJQQVv7FhK3">
          <div class="row">

              <div class="col-md-3">

                  <div class="form-group">
                      <label for="name" class="control-label">Name</label>

                      <div class="">
                          <input id="name" type="text" class="form-control" name="name" value="" required="" autofocus="">

                     </div>
                  </div>
              </div>
              <div class="col-md-3">

                  <div class="form-group">
                      <label for="email" class="control-label">E-Mail Address</label>

                      <div class="">
                          <input id="email" type="email" class="form-control" name="email" value="" required="">

                    </div>
                  </div>
              </div>

                  <div class="col-md-3">

                      <div class="form-group">
                          <label for="mobile" class="control-label">Mobile</label>

                          <div class="">
                              <input id="mobile" type="tel" class="form-control" name="mobile" value="" required="">

                        </div>
                      </div>

                     </div>

          <div class="col-md-3">
              <div class="form-group">
                      <label for="location_id" class=" control-label">Location/Site</label>

                      <div class="">
                              <select class="form-control" name="location_id">

                                      <option disabled="">Allocate Location</option>
                                    
                                      <option value="1"> Kitengela House </option>
                                      <option value="2"> HQ </option>
                                      <option value="3"> Iko Briq Factory </option>
                                      <option value="4"> Kenapen Industries </option>
                                      <option value="5"> KAPA Oil Refineries </option>
                                      <option value="6"> Home </option>
                                      <option value="7"> Purple Haze Westalnds </option>
                                      <option value="8"> Capital M Westlands </option>
                                      <option value="9"> ENGCON </option>
                                      <option value="10"> Palazzo Westlands </option>
                                      <option value="11"> One Africa Westlands </option>
                                      <option value="12"> Metal Equipment </option>
                                      <option value="13"> Moyes Personal Use </option>
                                      <option value="14"> Galaxy Fasteners </option>
                                      <option value="15"> Cockerill East Africa Ltd </option>
                                      <option value="16"> Kenya Builders Mlolongo </option>
                                          
                              </select>
                                                                              </div>
                </div>

          </div>
      </div>
            <div class="row">
                <div class="col-md-3">

                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>

                        <div class="">
                            <input id="password" type="password" class="form-control" name="password" required="">

                       </div>
                    </div>
                </div>


                <div class="col-md-3">

                    <div class="form-group">
                        <label for="password-confirm" class="control-label">Confirm
                            Password</label>

                        <div class="">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">

                        </div>
                    </div>
                </div>

              <div class="col-md-1">
                  <div class="form-group">
                      <label for="isClerk" class="control-label">Clerk</label>
                      <div class="">
                          <input id="isClerk" type="checkbox" class="" name="isClerk">
                      </div>
                  </div>
              </div>
              <div class="col-md-1">
                  <div class="form-group">
                      <label for="isOfficer" class="control-label">Officer</label>
                      <div class="">
                          <input id="isOfficer" type="checkbox" class="" name="isOfficer">
                      </div>
                  </div>
              </div>
              <div class="col-md-1">
                  <div class="form-group">
                      <label for="isManager" class="control-label">Manager</label>
                      <div class="">
                          <input id="isManager" type="checkbox" class="" name="isManager">
                      </div>
                  </div>
              </div>
              <div class="col-md-1">
                  <div class="form-group">
                      <label for="isAdmin" class="control-label">Admin</label>
                      <div class="">
                          <input id="isAdmin" type="checkbox" class="" name="isAdmin">
                      </div>
                  </div>
              </div>

          </div>

          <div class="row">
              <div class=" col float-left">
                  <input type="reset">
              </div>
              <div class="col float-right">
                  <button type="submit" class="btn btn-primary btn-sm float-right">
                      Save
                  </button>
              </div>


          </div>
          <!--end of panel body -->



        </form>
    </div>
</div>
</div>
</div>
  </div>
</div>

    </div>

    <div class="col-sm-2 "></div>
</div>

</div>
</div>
  

@endsection