@extends('Admin.admin-lte')
@section('page_title')
Brands
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="container mt-1">
      <h3 class="text-muted">Tool Brands</h3>
        <p class="text-muted mb-3">Tool brand describes the manufacturer or popular name.</p>
          <div class="card mb-4">

        <div class="card-header">

          <a href="{{ route('brands.create') }}">Create a Tool Brand</a>
  
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Brand Name</th>
                              <th>Description</th>
                              <th>Created</th>
                              <th>Modified</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ID</th>
                              <th>Brand Name</th>
                              <th>Description</th>
                              <th>Created</th>
                              <th>Modified</th>
                              <th>Action</th>
                          </tr>
                      </tfoot>
                      <tbody>
                        @foreach($brands as $key => $row)
                        <tr>
                          <td>{{$key +1}}</td>
                          <td><a>{{$row->name}}</a></td>
                          <td>{{$row->description}}</td>
                          <td>{{$row->created_at}}</td>
                          <td>{{$row->updated_at}}</td>
                          <td>
                            <a href="{{ URL::to('/brands/'.$row->id.'/edit') }}" class="btn btn-small btn-warning text-white">Edit</a>
                            <a href="{{ URL::to('/brands/'.$row->id.'/delete') }}" class="btn btn-small btn-default">Delete</a>
                          </td>
                      </tr>
                      @endforeach
                      
                      </tbody>
                  </table>
              </div>
              <a href="/brands/export" class="btn btn-primary btn-sm text-white"><i class="fa fa-download" style="color: gray"></i>   Generate Report</a>
          </div>
      </div>
      <!-- End of Content Wrapper -->

</div>

<div class="container mt-2">

</div>

</div>
</div>
  

@endsection