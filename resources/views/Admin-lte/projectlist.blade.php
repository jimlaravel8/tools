@extends('Admin.admin-lte')
@section('page_title')
Projects
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="container mt-1">
      <h3 class="text-muted">Project</h3>
        <p class="text-muted mb-3">Tools are assigned to projects. Click 'create' to create a project that you will assign tools and consumables to later!</p>
          <div class="card mb-4">

        <div class="card-header">

          <a href="{{ route('project.create') }}">Create Project</a>
  
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

                          @foreach ($projects as $key=>$row)
                        <tr>
                          <td><a>{{$key +1}}</a></td>
                          <td>{{$row->name}}</td>
                          <td>{{$row->description}}</td>
                          <td>{{$row->created_at}}</td>
                          <td>{{$row->updated_at}}</td>
                          <td>
                            <a href="{{ URL::to('/projects/'.$row->id.'/edit') }}" class="btn btn-sm btn-warning text-white">Edit</a>
                            <a href="{{ URL::to('/projects/'.$row->id.'/delete') }}" class="btn btn-sm btn-default">Delete</a>
                          </td>
                      </tr>
                      @endforeach
                      
                      </tbody>
                  </table>
              </div>
              <a href="/projects/export" class="btn btn-primary btn-sm text-white"><i class="fa fa-download" style="color: gray"></i>   Generate Report</a>
          </div>
      </div>
      <!-- End of Content Wrapper -->

</div>

<div class="container mt-2">

</div>

</div>
</div>
  

@endsection