@extends('Admin.admin-lte')
@section('page_title')
Warehouses/Bins
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="container mt-1">
      <h3 class="text-muted">Warehouses/Bins</h3>
        <p class="text-muted mb-3">A warehouse/bin houses tools. A Warehouse/bin is inside a "Location". Click 'create warehouse' to create a warehouse/bin location in a site!</p>
          <div class="card mb-4">

        <div class="card-header">

          <a href="{{ route('warehouses.create') }}">Create a Warehouse/Bin</a>
  
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Warehouse/Bin (Inventories)</th>
                              <th>Location</th>
                              <th>Created</th>
                              <th>Modified</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ID</th>
                              <th>Warehouse/Bin (Inventories)</th>
                              <th>Location</th>
                              <th>Created</th>
                              <th>Modified</th>
                              <th>Action</th>
                          </tr>
                      </tfoot>
                      <tbody>
                        @foreach($warehouse as $key => $row)
                        <tr>
                          <td><a>{{$key +1}}</a></td>
                          <td>{{$row->name}}</td>
                          <td>{{$row->location}}</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>
                            <button class="btn btn-small btn-warning text-white">Edit</button>
                            <button class="btn btn-small btn-default">Delete</button>
                          </td>
                      </tr>
                      @endforeach
                      
                      </tbody>
                  </table>
              </div>
              <a href="" class="btn btn-primary btn-sm text-white"><i class="fa fa-download" style="color: gray"></i>   Generate Report</a>
          </div>
      </div>
      <!-- End of Content Wrapper -->

</div>

<div class="container mt-2">

</div>

</div>
</div>
  

@endsection