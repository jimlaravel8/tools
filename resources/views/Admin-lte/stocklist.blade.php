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
      <h3 class="text-muted">Current Stock For All Sites</h3>
          <div class="card mb-4">

        <div class="card-header">

            <button class=" btn btn-small btn-primary float-right">Go Back</button>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                            <th>Tool</th>
                            <th>Serial</th>
                            <th>Unit</th>
                            <th>Qty</th>
                            <th>Toolkit</th>
                            <th>Warehouse</th>
                            <th>Site</th>
                            <th>Created</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                            <th>Tool</th>
                            <th>Warehouse</th>
                            <th>Start mileage</th>
                            <th>Stop mileage</th>
                            <th>Qty</th>
                            <th>Lpo</th>
                            <th>Description</th>
                            <th>Created</th>
                          </tr>
                      </tfoot>
                      <tbody>
                        @foreach ($stock as $item)

                        <tr>
                            <td><a>{{ $item->tools }}</a></td>
                            <td><a>{{ $item->warehouse }}</a></td>
                            <td><a>{{ $item->start_mileage }}</a></td>
                            <td><a>{{ $item->stop_mileage }}</a></td>
                            <td><a>{{ $item->quantities }}</a></td>
                            <td><a>{{ $item->lpo }}</a></td>
                            <td><a>{{ $item->description }}</a></td>
                            <td><a>{{ $item->created_at }}</a></td>
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
