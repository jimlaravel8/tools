@extends('Admin.admin-lte')
@section('page_title')
Projects
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="container">
        <div class="card mt-2">

        <div class="card-header">

          <p class="text-muted">Create Project</p>
  
          </div>
          <div class="card-body">
            <form action="{{ route('store.projects') }}" method="post">
              @csrf
                <div class="form-group w-50">
                  <label for="projectName">Project Name</label>
                  <input type="text" class="form-control" name="name" id="projectName" aria-describedby="projectNameAdd">
                </div>
                <div class="form-group w-50">
                  <label for="projectDescription">Description</label>
                  <input type="text" class="form-control" name="description" id="projectDescription">
                </div>
                <button type="submit" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-primary">Create Project</button>
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