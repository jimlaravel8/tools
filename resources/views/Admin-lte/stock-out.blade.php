@extends('Admin.admin-lte')
@section('page_title')
Stock Out
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
<div class="content-wrapper">

<div class="container-fluid">





<!--show messages-->


<div class="col-sm-12">

<div class="card uper" style="margin-bottom:50px;">
<div class="card-header">
<a href="#" class="btn btn-sm btn-primary float-right">cancel</a>

Record Stock Out or Wastage
</div>
<div class="card-body">



<div class="row">
<div class="col panel panel-default">
<div class="panel-heading"></div>

<div class="panel-body">
<form class="form-horizontal"  action="#" enctype="multipart/form-data">
<input type="hidden" name="_token" value="wv1Te7nfQ7EfXnuxksRkx7DLq6wKnfYAH5eEJLem">
<div class="form-row">
<div class="col-md-3 form-group">
<label for="transferer" class="control-label">Officer:
<strong>David Waiganjo</strong></label>

<input id="transferer" type="text" class="form-control" value="1" name="transferer" required="" hidden="">
</div>
<div class="col-md-3 form-group">
<label for="user_id" class="control-label">Responsible</label>
<select class="form-control" name="user_id" required="">
<option disabled="">Responsible employee</option>
<option value="1"> David Waiganjo </option>
<option value="2"> Washington Oballa </option>
<option value="3"> User User </option>
<option value="4"> Vipul Amin </option>
<option value="5"> Joseph Musau </option>
<option value="6"> Martin Mutunga </option>
<option value="7"> Elphas  Angaluki </option>
<option value="8"> Wambua </option>
<option value="9"> Boniface Wambua </option>
<option value="10"> Erick Mbaya </option>
<option value="11"> User Tembo </option>
<option value="12"> User Modo </option>
<option value="13"> Moyes </option>
<option value="14"> Michael Ngugi </option>
<option value="15"> Olivia </option>
<option value="16"> bazenga </option>
<option value="17"> lawrence Njenga </option>
<option value="18"> Marrionatte Wanjiru </option>
<option value="19"> law </option>
<option value="20"> demo user </option>
<option value="24"> Sajal Kundu </option>
</select>
</div>
<div class="col-md-3 form-group has-error">
<label for="description" class="control-label">Memo</label>
<input id="description" type="text" class="form-control" name="description">
</div>
<div class="col-md-3 form-group">
<label for="job_card" class="control-label">Job Card</label>
<input id="job_card" type="text" class="form-control" name="job_card">
</div>
<div class="col-md-3 form-group">
<label for="start_mileage" class="control-label">Start mileage</label>
<input id="start_mileage" type="text" class="form-control" name="start_mileage">
</div>
<div class="col-md-3 form-group">
<label for="stop_mileage" class="control-label">Stop mileage</label>
<input id="stop_mileage" type="text" class="form-control" name="stop_mileage">
</div>
<div class="col-md-3 form-group">
<label for="vehicle" class="control-label">Vehicle</label>
<input id="vehicle" type="text" class="form-control" name="vehicle">
</div>
<div class="col-md-3 form-group">
<label for="description" class="control-label">Project</label><br>


<input list="projects" name="project" required="">
<datalist id="projects">
<option value="Kenapen Smart Metering">
</option>
<option value="Kitengela House Project">
</option>
<option value="KAPA Maxeff Demo">
</option>
<option value="Repair">
</option>
<option value="Purple Haze Drilling">
</option>
<option value="Capital M Westlands">
</option>
<option value="ENGCON Project">
</option>
<option value="Palazzo Works">
</option>
<option value="Ikobriq Productions">
</option>
<option value="One Africa Repair">
</option>
<option value="Metal Equipment Tool Request">
</option>
<option value="Personal Use">
</option>
<option value="Devsons">
</option>
<option value="Tool Hire">
</option>
<option value="Kenya Builders Mlolongo">
</option>
</datalist>

</div>
<div class="col-md-2">
<div class="form-group">
<label for="documentfile">Document/File</label>
<input id="documentfile" type="file" class="" name="documentfile">
</div>
</div>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<div class="table-responsive">
<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable compact" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="...: activate to sort column descending" style="width: 12px;">...</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 63px;">Name</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Serial: activate to sort column ascending" style="width: 87px;">Serial</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Source Site: activate to sort column ascending" style="width: 52px;">Source Site</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Source Bin: activate to sort column ascending" style="width: 52px;">Source Bin</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Toolkit: activate to sort column ascending" style="width: 50px;">Toolkit</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Unit: activate to sort column ascending" style="width: 32px;">Unit</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Qty: activate to sort column ascending" style="width: 27px;">Qty</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Qty to move: activate to sort column ascending" style="width: 40px;">Qty to move</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Expected: activate to sort column ascending" style="width: 178px;">Expected</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Comment: activate to sort column ascending" style="width: 72px;">Comment</th></tr>
</thead>
<tfoot>
<tr><th rowspan="1" colspan="1">...</th><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Serial</th><th rowspan="1" colspan="1">Source Site</th><th rowspan="1" colspan="1">Source Bin</th><th rowspan="1" colspan="1">Toolkit</th><th rowspan="1" colspan="1">Unit</th><th rowspan="1" colspan="1">Qty</th><th rowspan="1" colspan="1">Qty to move</th><th rowspan="1" colspan="1">Expected</th><th rowspan="1" colspan="1">Comment</th></tr>
</tfoot>
<tbody>

<tr role="row" class="odd">                                                     <td class="sorting_1"><input size="4" type="hidden" name="stock_ids[]" value="23" readonly=""></td>
<td>Makita Impact Drill: Concrete: 20mm Steel  </td>
<td>  </td>
<td>HQ  </td>
<td>HQ-02-E-04  </td>
<td>  </td>
<td>Pcs </td>

<td>1  </td>

<td class="text-danger">
<input type="number" maxlength="4" max="1" size="4" name="quantities[]" min="1">
</td>
<td class="text-danger">
<input type="date" name="expecteds[]" class="form-control">
</td>
<td class="text-danger">
<input type="text" size="4" name="comments[]" min="1">
</td>
</tr><tr role="row" class="even">                                                     <td class="sorting_1"><input size="4" type="hidden" name="stock_ids[]" value="25" readonly=""></td>
<td>Impact Drill : Concrete : 16mm 5/8" Steel : 13mm  1/2"Wood : 30mm 1-3/16" - 868723  </td>
<td>868723  </td>
<td>HQ  </td>
<td>HQ-02-E-04  </td>
<td>  </td>
<td>Pcs </td>

<td>1  </td>

<td class="text-danger">
<input type="number" maxlength="4" max="1" size="4" name="quantities[]" min="1">
</td>
<td class="text-danger">
<input type="date" name="expecteds[]" class="form-control">
</td>
<td class="text-danger">
<input type="text" size="4" name="comments[]" min="1">
</td>
</tr><tr role="row" class="odd">                                                     <td class="sorting_1"><input size="4" type="hidden" name="stock_ids[]" value="27" readonly=""></td>
<td>Bosch Impact Drill: Steel :10 mm  Wood : 25mm concrete: 13mm - 001002205  </td>
<td>001002205  </td>
<td>HQ  </td>
<td>HQ-02-E-04  </td>
<td>  </td>
<td>Pcs </td>

<td>1  </td>

<td class="text-danger">
<input type="number" maxlength="4" max="1" size="4" name="quantities[]" min="1">
</td>
<td class="text-danger">
<input type="date" name="expecteds[]" class="form-control">
</td>
<td class="text-danger">
<input type="text" size="4" name="comments[]" min="1">
</td>
</tr><tr role="row" class="even">                                                     <td class="sorting_1"><input size="4" type="hidden" name="stock_ids[]" value="29" readonly=""></td>
<td>Jigsaw Var Speed, 450 W  </td>
<td>  </td>
<td>HQ  </td>
<td>HQ-02-E-04  </td>
<td>  </td>
<td>Pcs </td>

<td>1  </td>

<td class="text-danger">
<input type="number" maxlength="4" max="1" size="4" name="quantities[]" min="1">
</td>
<td class="text-danger">
<input type="date" name="expecteds[]" class="form-control">
</td>
<td class="text-danger">
<input type="text" size="4" name="comments[]" min="1">
</td>
</tr><tr role="row" class="odd">                                                     <td class="sorting_1"><input size="4" type="hidden" name="stock_ids[]" value="31" readonly=""></td>
<td>Kress Electric scroll jigsaw 650w : wood 110mm, metal 6mm - 20152810059  </td>
<td>20152810059  </td>
<td>HQ  </td>
<td>HQ-02-D-03  </td>
<td>  </td>
<td>Pcs </td>

<td>1  </td>

<td class="text-danger">
<input type="number" maxlength="4" max="1" size="4" name="quantities[]" min="1">
</td>
<td class="text-danger">
<input type="date" name="expecteds[]" class="form-control">
</td>
<td class="text-danger">
<input type="text" size="4" name="comments[]" min="1">
</td>
</tr><tr role="row" class="even">                                                     <td class="sorting_1"><input size="4" type="hidden" name="stock_ids[]" value="33" readonly=""></td>
<td>1400w Circular Saw (185mm) 30265-43  </td>
<td>30265-43  </td>
<td>HQ  </td>
<td>HQ-02-E-04  </td>
<td>  </td>
<td>Pcs </td>

<td>2  </td>

<td class="text-danger">
<input type="number" maxlength="4" max="2" size="4" name="quantities[]" min="1">
</td>
<td class="text-danger">
<input type="date" name="expecteds[]" class="form-control">
</td>
<td class="text-danger">
<input type="text" size="4" name="comments[]" min="1">
</td>
</tr><tr role="row" class="odd">                                                     <td class="sorting_1"><input size="4" type="hidden" name="stock_ids[]" value="35" readonly=""></td>
<td>Bag Closing Machine - 241024  </td>
<td>241024  </td>
<td>HQ  </td>
<td>HQ-02-E-04  </td>
<td>  </td>
<td>Pcs </td>

<td>1  </td>

<td class="text-danger">
<input type="number" maxlength="4" max="1" size="4" name="quantities[]" min="1">
</td>
<td class="text-danger">
<input type="date" name="expecteds[]" class="form-control">
</td>
<td class="text-danger">
<input type="text" size="4" name="comments[]" min="1">
</td>
</tr><tr role="row" class="even">                                                     <td class="sorting_1"><input size="4" type="hidden" name="stock_ids[]" value="37" readonly=""></td>
<td>Total Aspirator Dust  blower TB2066TEL1  </td>
<td>TB2066TEL1  </td>
<td>HQ  </td>
<td>HQ-02-D-01  </td>
<td>  </td>
<td>Pcs </td>

<td>1  </td>

<td class="text-danger">
<input type="number" maxlength="4" max="1" size="4" name="quantities[]" min="1">
</td>
<td class="text-danger">
<input type="date" name="expecteds[]" class="form-control">
</td>
<td class="text-danger">
<input type="text" size="4" name="comments[]" min="1">
</td>
</tr><tr role="row" class="odd">                                                     <td class="sorting_1"><input size="4" type="hidden" name="stock_ids[]" value="39" readonly=""></td>
<td>Electric core drilling machine : Max.: 42 mm  Min.: 8 mm  - 7071-03/2016  </td>
<td>7071-03/2016  </td>
<td>HQ  </td>
<td>HQ-02-E-02  </td>
<td>  </td>
<td>Pcs </td>

<td>1  </td>

<td class="text-danger">
<input type="number" maxlength="4" max="1" size="4" name="quantities[]" min="1">
</td>
<td class="text-danger">
<input type="date" name="expecteds[]" class="form-control">
</td>
<td class="text-danger">
<input type="text" size="4" name="comments[]" min="1">
</td>
</tr><tr role="row" class="even">                                                     <td class="sorting_1"><input size="4" type="hidden" name="stock_ids[]" value="41" readonly=""></td>
<td>REMS Electric diamond core drilling machine  </td>
<td>  </td>
<td>HQ  </td>
<td>HQ-02-E-02  </td>
<td>  </td>
<td>Pcs </td>

<td>1  </td>

<td class="text-danger">
<input type="number" maxlength="4" max="1" size="4" name="quantities[]" min="1">
</td>
<td class="text-danger">
<input type="date" name="expecteds[]" class="form-control">
</td>
<td class="text-danger">
<input type="text" size="4" name="comments[]" min="1">
</td>
</tr></tbody>
</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 283 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="dataTable_ellipsis"><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">29</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
</div>
</div>
</div>
<div class="row">
<div class=" col float-left">
<input type="reset">
</div>
<div class="col float-right">
<button type="submit" class="btn btn-primary btn-sm float-right">
Save
</button>
</div>
</div>
</form>
</div>
</div>
</div>

<!-- Page Heading -->





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer id="" class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
<span>Copyright ©  2019</span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>

</div>
</div>


@endsection