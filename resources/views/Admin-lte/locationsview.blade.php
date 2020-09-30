@extends('Admin.admin-lte')
@section('page_title')
Sites
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="container mt-1">
      <h3 class="text-muted">Locations/Sites</h3>
        <p class="text-muted mb-3">A Location/site houses warehouses. A location must exist before a warehouse.</p>
          <div class="card mb-4">

        <div class="card-header">

          <a href="{{ route('locations.create') }}">Create a Location/Site</a>
  
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Location/Site (Bin qty)</th>
                              <th>Description</th>
                              <th>Created</th>
                              <th>Modified</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ID</th>
                              <th><a>Location/Site (Bin qty)</a></th>
                              <th>Description</th>
                              <th>Created</th>
                              <th>Modified</th>
                              <th>Action</th>
                          </tr>
                      </tfoot>
                      <tbody>
                        @foreach ($locations as $key=>$row)

                        <tr>
                          <td><a>{{$key +1}}</a></td>
                          <td>{{$row->name}}</td>
                          <td>{{$row->description}}</td>
                          <td>{{$row->created_at}}</td>
                          <td>{{$row->updated_at}}</td>
                          <td>
                            <a href="{{ URL::to('/locations/'.$row->id.'/edit') }}" class="btn btn-small btn-warning text-white">Edit</a>
                            <a href="{{ URL::to('/locations/'.$row->id.'/delete') }}" class="btn btn-small btn-default">Delete</a>
                          </td>
                      </tr>

                      @endforeach
                      
                      </tbody>
                  </table>
              </div>
              <a href="/locations/export" class="btn btn-primary btn-sm text-white"><i class="fa fa-download" style="color: gray"></i>   Generate Report</a>
          </div>
      </div>
      <!-- End of Content Wrapper -->

</div>

<div class="container mt-2">

</div>

</div>
</div>
  

@endsection