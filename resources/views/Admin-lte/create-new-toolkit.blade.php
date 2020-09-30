@extends('Admin.admin-lte')
@section('page_title')
Manage Stock
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
  <div class="content-wrapper">
<div class="container-fluid">
              
<div class="row">
<div class="col-sm-2 "></div>

<div class="col-sm-8">

<div class="card uper" style="margin-bottom:50px;">
<div class="card-header">
Create a Tool Toolkit
<a href="https://tool.iwira.co.ke/toolkits" class="btn btn-sm btn-primary float-right">cancel</a>

</div>

<div class="card-body">
   @if(session('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
        @endif
        @if ($errors->any())
          <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach 
              </ul>
          </div>
        @endif

<div class="row">
<div class="col col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">
</div>

<div class="panel-body">
<form class="form-horizontal" method="POST" action="{{route('createToolkitPost')}}">
{{ csrf_field() }}   
<div class="row">

<div class="col-md-4">

<div class="form-group">
<label for="name" class="control-label">Name</label>

<div class="">
<input id="name" type="text" class="form-control" name="name" value="" required="" autofocus="">
</div>
</div>
</div>
<div class="col-md-4">

<div class="form-group">
<label for="description" class="control-label">Description</label>

<div class="">
<input id="description" type="text" class="form-control" name="description" required="">

 </div>
</div>
</div>

</div>

<div class="row">
<div class=" col float-left">
<input type="reset">
</div><div class="col float-right">
<button type="submit" class="btn btn-primary btn-sm float-right">
Save
</button>
</div>


</div><!--end of panel body -->



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

            <!-- Page Heading -->





          </div>
</div>
</div>
  

@endsection