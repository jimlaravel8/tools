@extends('Admin.admin-lte')
@section('page_title')
Tool Manager
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="container-fluid mt-1">
      <h3 class="text-muted">Tools</h3>
          <div class="card mb-4">

        <div class="card-header">
            <a class=" btn btn-md btn-primary float-left" href="/create-new-tool">Create a New Tool</a>

            <button class=" btn btn-sm btn-primary float-right">Go Back</button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Img</th>
                            <th>Code</th>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Qty</th>
                            <th>Category</th>
                            <th>Condition</th>
                            <th>Brand</th>
                            <th>Callibration</th>
                            <th>Warranty</th>
                            <th>Expected</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Img</th>
                            <th>Code</th>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Qty</th>
                            <th>Category</th>
                            <th>Condition</th>
                            <th>Brand</th>
                            <th>Callibration</th>
                            <th>Warranty</th>
                            <th>Expected</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($tools as $key => $item)
                      <tr>
                        <td><a>1</a></td>
                        <td><img src="{{ $item->image }}" alt="" style="width: 70px"></td>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->serials }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->unit }}</td>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->category_id }}</td>
                        <td>{{ $item->condition }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>{{ $item->callibration }}</td>
                        <td>{{ $item->warranty }}</td>
                        <td>{{ $item->expected }}</td>
                        <td>
                          <a href="/edit-tool/{{ $item->id }}" class="btn btn-small btn-warning text-white">Edit</a>
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
