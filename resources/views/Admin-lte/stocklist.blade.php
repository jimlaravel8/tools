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
                            <th>Serial</th>
                            <th>Unit</th>
                            <th>Qty</th>
                            <th>Toolkit</th>
                            <th>Warehouse</th>
                            <th>Site</th>
                            <th>Created</th>
                          </tr>
                      </tfoot>
                      <tbody>

                        <tr>
                            <td><a>Tiger Nixon</a></td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                      </tr>

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
