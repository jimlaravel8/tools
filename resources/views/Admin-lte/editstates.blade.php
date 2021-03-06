@extends('Admin.admin-lte')
@section('page_title')
Edit States
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="container">
        <div class="card mt-2">

        <div class="card-header">

          <p class="text-muted float-left">Modify a Tool State</p>
          
          <button class="btn btn-small btn-primary float-right">Cancel</button>
  
          </div>
          <div class="card-body">
            <form action="{{url('states/'.$states->id.'/update')}}" method="post">
              @csrf
                <div class="row">
                  <div class="col-md-4">
                    <label for="subcategoryName">Name</label>
                    <input type="text" class="form-control" name="name" id="subcategoryName" value="{{$states->name}}">
                  </div>
                  <div class="col-md-4">
                    <label for="warehouseDescription">Description</label>
                    <input type="text" class="form-control" name="description" id="locationDescription" value="{{$states->description}}">
                  </div>
                  <div class="col-md-4">
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-4">
                    <button class="btn btn-small btn-default">Reset</button>
                  </div>
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-small btn-primary float-right">Save</button>
                  </div>
                </div>
              </form>
          </div>
      </div>
      <!-- End of Content Wrapper -->

</div>

<div class="container mt-2">

</div>

</div>
</div>
  

@endsection