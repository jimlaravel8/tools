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

  <div class="col-sm-12">

    <div class="card uper" style="margin-bottom:50px;">
        <div class="card-header">
            <a href="#" class="btn btn-sm btn-primary float-right">cancel</a>

            Select Move type
        </div>
        <div class="card-body">
            
    <div class="row text-center">
           
            <a href="{{route('transfer')}}" class="btn btn-md mr-2 btn-success">Transfer Toolkit
                    <span class="badge badge-light">from A to B</span>
                </a>
            

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