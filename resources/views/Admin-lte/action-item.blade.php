@extends('Admin.admin-lte')
@section('page_title')
Action Item
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="container-fluid mt-2">
      <div class="col-sm-12">

        <div class="card uper" style="margin-bottom:50px;">
            <div class="card-header">
                <a href="#" class="btn btn-sm btn-primary float-right">cancel</a>

            Action Item
          </div>
        <div class="card-body">
            
         <div class="row text-center">

            <a href="#" class="btn btn-md mr-2 btn-danger">Transfers to Authorize </a>
                   
            <a href="#" class="btn btn-md mr-2 bg-success">Authorized Transfers</a>

         </div>

      </div>
          <!-- /.container-fluid -->

   </div>
        <!-- End of Main Content -->

      
  </div>
      <!-- End of Content Wrapper -->

</div>

</div>
</div>
  

@endsection