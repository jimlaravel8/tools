@extends('Admin.admin-lte')
@section('page_title')
Create Tool
@endsection

@section('main_content')
@include('Admin-lte/partials/nav')
@include('Admin-lte/partials/side-bar')
<div class="wrapper">
 <div class="content-wrapper">

  <div class="container-fluid">

  <div class="row">
    <div class="col-sm-1 "></div>
      <div class="col-sm-10">
        <div class="card uper" style="margin-bottom:50px;">
            <div class="card-header">
              <a href="https://tool.iwira.co.ke/stockin" class="btn btn-sm btn-primary float-right">cancel</a>

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
   <form method="PATCH" action="/edit-tool-post/{{ $tool->id }}" enctype="multipart/form-data">
    {{ csrf_field() }}


    <div class="row">
         <div class="col-md-3">
          <div class="formg-roup">
          <label for="name" class="control-label">Name</label>&nbsp;<small><i class="fas text-danger fa-star-of-life fa-sm "></i></small>
          <input id="name" type="text" class="form-control" name="name" value="{{ $tool->name }}" required="" autofocus="">
        </div>
        </div>
      <div class="col-md-3">

      <div class="form-group">
      <label for="code" class="control-label">Code</label>

      <input id="code" type="text" class="form-control" name="code" value="{{ $tool->code }}">

      </div>
      </div>

    <div class="col-md-3">

    <div class="form-group">
    <label for="serial" class="control-label">Serial</label>

    <input id="serial" type="text" class="form-control" name="serial" value="{{ $tool->serial }}">

    </div>

    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label for="image" class="control-label">Image URL</label>

    <div class="">
    <input id="image" type="text" class="form-control" name="image" value="{{ $tool->image }}">

    <!--<input id="image" type="file" class="form-control" name="image" />-->
    </div>
    </div>

    </div>

</div>

<div class="row">
<div class="col-md-3">
<div class="form-group">
<label for="category_id" class="control-label">Sub Category</label>&nbsp;<small><i class="fas text-danger fa-star-of-life fa-sm "></i></small>

<input list="categories" name="category">
<datalist id="categories">
<option value="Circular Saw">
</option>
<option value="Jig Saw">
</option>
<option value="Heatgun">
</option>
<option value="Impact Drill">
</option>
<option value="Crimping Tool">
</option>
<option value="Hammer">
</option>
<option value="Angle grinder">
</option>
<option value="Slitting Machine">
</option>
<option value="Sander">
</option>
<option value="Bit Set">
</option>
<option value="Plunge Router">
</option>
<option value="Rotary Hammer">
</option>
<option value="Bag Closing Machne">
</option>
<option value="Blower">
</option>
<option value="Core Drilling Machine">
</option>
<option value="Electric Breaker">
</option>
<option value="Combihammer">
</option>
<option value="Dies">
</option>
<option value="Adjustable Spanner">
</option>
<option value="Drill Driver">
</option>
<option value="Cordless drill">
</option>
<option value="n/a">
</option>
<option value="Tile Cutter">
</option>
<option value="Polisher">
</option>
<option value="Jointing Machine">
</option>
<option value="Double Open Spanner">
</option>
<option value="Battery Charger">
</option>
<option value="Drill Rig">
</option>
<option value="Single Open End Spanner - Phosphated">
</option>
<option value="Metal Cutting Saw">
</option>
<option value="Arc Welder">
</option>
<option value="Pressure Vessel">
</option>
<option value="Vacuum Cleaner">
</option>
<option value="Vice">
</option>
<option value="Mount Press">
</option>
<option value="Combination Spanner">
</option>
<option value="Wire Stripper">
</option>
<option value="Cable Cutter">
</option>
<option value="Plastic Pipe Cutter">
</option>
<option value="Insulation Stripper">
</option>
<option value="Tube Bender">
</option>
<option value="G-Clamp">
</option>
<option value="Bolt Cutters">
</option>
<option value="T Bar clamps">
</option>
<option value="Hacksaw Handle">
</option>
<option value="Socket Set">
</option>
<option value="Slotted    Flat    Screw Driver">
</option>
<option value="Philips                                      Star                         Screw Driver">
</option>
<option value="Philips Star   Screw Driver">
</option>
<option value="Double Ended Ring Spanner">
</option>
<option value="Square Ruler">
</option>
<option value="Spirit Level">
</option>
<option value="Bending Spring">
</option>
<option value="Axes">
</option>
<option value="Pangas">
</option>
<option value="Wire Brush">
</option>
<option value="Tape Measure">
</option>
<option value="Blankets">
</option>
<option value="Hoist Belts">
</option>
<option value="Gloves">
</option>
<option value="Goggles">
</option>
<option value="Earmuffs">
</option>
<option value="Potato Chipper">
</option>
<option value="Water Pump">
</option>
<option value="Service Jack">
</option>
<option value="Icing Machine">
</option>
<option value="Oil Pump">
</option>
<option value="Power Supply">
</option>
<option value="Setting Tools">
</option>
<option value="Corebit Extension">
</option>
<option value="Gas Burner">
</option>
<option value="Sand Paper Planer">
</option>
<option value="Claw Bars">
</option>
<option value="Wheel Spanner">
</option>
<option value="Gas Regulators">
</option>
<option value="Greasing Guns">
</option>
<option value="First Aid">
</option>
<option value="Machines">
</option>
<option value="Multimeter">
</option>
<option value="Shears">
</option>
<option value="Pliers">
</option>
<option value="Overall">
</option>
<option value="Helmets">
</option>
<option value="Pipe Wrench">
</option>
<option value="Dropping Anchors">
</option>
<option value="Consumables">
</option>
<option value="Corebit Adapter">
</option>
<option value="Detectors">
</option>
<option value="Pull Out Machine">
</option>
<option value="Mason Bit">
</option>
<option value="Calliper">
</option>
<option value="Punch">
</option>
<option value="Mitre saw">
</option>
<option value="Curved saw">
</option>
<option value="allen Key">
</option>
<option value="T-Bar">
</option>
<option value="Strapping Machines">
</option>
<option value="Blocks">
</option>
<option value="Socket Adaptor">
</option>
<option value="Laser">
</option>
<option value="Straps">
</option>
<option value="Accessories">
</option>
<option value="Step Ladder">
</option>
<option value="Dispensers">
</option>
<option value="Hand wash Stion">
</option>
<option value="Hand wash Station">
</option>
<option value="Chain Block">
</option>
<option value="Holes Saw">
</option>
<option value="Panels">
</option>
</datalist>

</div>

</div>


<div class="col-md-3">
<div class="form-group ">
<label for="unit" class="control-label">Unit</label><br>

<input list="units" name="unit">
<datalist id="units">
          <option value="Pcs">
</option>
      </datalist>


</div>
</div>

<div class="col-md-3">

<div class="form-group">
<label for="state" class="control-label">State</label>&nbsp;

<input list="states" name="state">
<datalist id="states">
  <option value="Usable">
</option>
  <option value="Faulty">
</option>
</datalist>
</div>
</div>

<div class="col-md-3">
<div class="form-group ">
<label for="brand" class="control-label">Brand</label>

<input list="brands" name="brand">
<datalist id="brands">
  <option value="Black and Decker">
</option>
  <option value="Bosch">
</option>
  <option value="Generic">
</option>
  <option value="Kress">
</option>
  <option value="Makita">
</option>
  <option value="Hilti">
</option>
  <option value="Duss">
</option>
  <option value="New Long">
</option>
  <option value="Total">
</option>
  <option value="Rems">
</option>
  <option value="stanley">
</option>
  <option value="Rubi Star">
</option>
  <option value="Talbro">
</option>
  <option value="Gedore">
</option>
  <option value="eastman">
</option>
  <option value="Watz">
</option>
  <option value="Metador">
</option>
  <option value="Telwin">
</option>
  <option value="Hugong">
</option>
  <option value="Starmix">
</option>
  <option value="Eclipse">
</option>
  <option value="Larzep">
</option>
  <option value="Procraft">
</option>
  <option value="Siegen Tools">
</option>
  <option value="Heyco Germany">
</option>
  <option value="Eternum">
</option>
  <option value="Kennedy">
</option>
  <option value="Baum">
</option>
  <option value="Acesa">
</option>
  <option value="VEW">
</option>
  <option value="Beta">
</option>
  <option value="Klauke">
</option>
  <option value="RIDGID">
</option>
  <option value="RENNSTEIG">
</option>
  <option value="Knipex">
</option>
  <option value="Draper">
</option>
  <option value="Record">
</option>
  <option value="Rotary">
</option>
  <option value="Irwin">
</option>
  <option value="Powermax">
</option>
  <option value="Diamond">
</option>
  <option value="Jahlani Exper">
</option>
  <option value="Fukung">
</option>
  <option value="Wiesemann">
</option>
  <option value="Flying Swaller">
</option>
  <option value="Disen Tool">
</option>
  <option value="ND">
</option>
  <option value="Inder">
</option>
  <option value="Omega">
</option>
  <option value="Dragon">
</option>
  <option value="Robin">
</option>
  <option value="Hobart">
</option>
  <option value="Sangdin">
</option>
  <option value="Ice Tech">
</option>
  <option value="Groz">
</option>
  <option value="Piusi">
</option>
  <option value="Siemens">
</option>
  <option value="Fischer">
</option>
  <option value="Camping Gaz">
</option>
  <option value="Indasa">
</option>
  <option value="10xygen">
</option>
  <option value="Samoa">
</option>
  <option value="Healthcare">
</option>
  <option value="Novopress">
</option>
  <option value="Sanwa">
</option>
  <option value="Fluke">
</option>
  <option value="Wavetek">
</option>
  <option value="Kuwes">
</option>
  <option value="China">
</option>
  <option value="Hydrajaws">
</option>
  <option value="Kingtony">
</option>
  <option value="Peron">
</option>
  <option value="Prince">
</option>
  <option value="Craftsman">
</option>
  <option value="Able">
</option>
  <option value="Geotub">
</option>
</datalist>


</div>
          </div>
      </div>
      <div class="row">

          <div class="col-md-2">
              <div class="form-group">
                  <label for="cost" class="control-label">Cost</label>&nbsp;<small></small>

                  <div class="">
                    <input id="cost" type="number" class="form-control" name="cost">

                  </div>
              </div>
          </div>

          <div class="col-md-2">
                  <div class="form-group">
                      <label for="price" class="control-label">Price</label>&nbsp;<small></small>

                      <div class="">
                          <input id="price" type="number" class="form-control" name="price">

                                                                              </div>
                  </div>
              </div>

          <div class="col-md-2">
              <div class="form-group">
                  <label for="purchase_details" class="control-label">Purchase
                      Details</label>

                  <div class="">
                      <input id="purchase_details" type="text" class="form-control" name="purchase_details">

                                                                      </div>
              </div>
          </div>



          <div class="col-md-2">
              <div class="form-group">
                  <label for="description" class="control-label">Description</label>

                  <div class="">
                      <input id="description" type="text" class="form-control" name="description">

                                                                      </div>
              </div>
          </div>

      </div>
      <div class="row">

          <div class="col-md-2">
              <div class="form-group">
                  <label for="callibration" class="control-label">Callibration</label>

                  <div class="">
                      <input id="callibration" type="date" class="form-control" name="callibration">

                                                                      </div>
              </div>
          </div>

          <div class="col-md-2">
              <div class="form-group">
                  <label for="warranty" class="control-label">Warranty</label>

                  <div class="">
                      <input id="warranty" type="date" class="form-control" name="warranty">

                                                                      </div>
              </div>
          </div>
          <div class="col-md-1">
              <div class="form-group">
                  <label for="auth" class="control-label">Authorize</label>

                  <div class="">
                      <input id="auth" type="checkbox" class="form-control" value="1" name="auth">
                  </div>
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
      <!--end of panel body -->

  </form>
</div>
</div>
</div>
</div>
</div>

<br>
<div style="margin-left:10%;" class="mt-5">
<strong>OR</strong> &nbsp;
</div>

<form class="form-inline" method="POST" action="{{route('createToolCsv')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

<div class="col-md-8 form-group">
    <label for="image" class="control-label"><small> &nbsp;&nbsp;Create New Tools by Importing Excel
            </small> </label>&nbsp;&nbsp;<a href="https://tool.iwira.co.ke/exporttools" class="btn btn-info btn-sm  mb-1">Download Template</a>&nbsp;&nbsp;
             <small class="text-danger mb-2">MAKE the "ID" column BLANK! Leave all column headers INTACT! then populate all your other values. see below.</small>

    <input id="tools" type="file" class="form-control m-2" name="tools">


    <button type="submit" class="btn btn-secondary float-right m-1">
        Import </button>
</div>
</form>
<br>
<img src="https://tool.iwira.co.ke/img/tools-import.png" class="img-fluid m-5" style="margin-bottom:10%;">


</div>

</div>

</div>

<!-- Page Heading -->

</div>

</div>
</div>


@endsection
