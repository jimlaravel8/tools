@extends('Admin.admin-lte')
@section('page_title')
Sub Categories
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="container mt-1">
      <h3 class="text-muted">Tool Sub-Categories</h3>
        <p class="text-muted mb-3">Tool Sub-Categories are used to classify tools.</p>
          <div class="card mb-4">

        <div class="card-header">

          <a href="{{ route('subcategory.create') }}">Create a Tool Sub-Category</a>
  
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Created</th>
                              <th>Modified</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Created</th>
                              <th>Modified</th>
                              <th>Action</th>
                          </tr>
                      </tfoot>
                      <tbody>

                        <tr>
                          <td><a>Tiger Nixon</a></td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>
                            <button class="btn btn-small btn-warning text-white">Edit</button>
                            <button class="btn btn-small btn-default">Delete</button>
                          </td>
                      </tr>
                      
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      <!-- End of Content Wrapper -->

</div>

<div class="container mt-2">

</div>

</div>
</div>
  

@endsection