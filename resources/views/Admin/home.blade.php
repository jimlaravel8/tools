@extends('Admin.template.template')
@section('page_title')
Home
@endsection

@section('main_content')
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>
  <div class="row mb-2" >
   <div class="col-md-4 col-lg-4 col-sm-4 ">
    <div class="card w-100 " style="background-color:  #3D8D8F;">
    <h3 class="text-white text-center">Total Transfer</h3>
    <h2 class="text-center text-white">75</h2>
      <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-4 col-4 ">
        <p class="text-center  text-white " >25<br>Today </p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4 col-4 ">
        <p class="text-center text-white" >25 <br>Week</p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4 col-4  ">
        <p class="text-center  text-white" >25 <br>Month</p>
      </div>
    </div>  
    </div>
   </div>

    <div class="col-md-4 col-lg-4 col-sm-4 ">
    <div class="card w-100 " style="background-color:  #F5927D  ">
    <h3 class="text-white text-center">Late Tools</h3>
    <h2 class="text-center text-white">75</h2>
      <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-4 col-4 ">
        <p class="text-center  text-white " >25<br>Today </p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4 col-4 ">
        <p class="text-center text-white" >25 <br>Week</p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4 col-4  ">
        <p class="text-center  text-white" >25 <br>Month</p>
      </div>
    </div>  
    </div>
   </div>

   <div class="col-md-4 col-lg-4 col-sm-4 ">
    <div class="card w-100 " style="background-color:  #2C4483 ">
    <h3 class="text-white text-center">Notice</h3>
    <h2 class="text-center text-white">75</h2>
      <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-4 col-4 ">
        <p class="text-center  text-white " >25<br>Today </p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4 col-4 ">
        <p class="text-center text-white" >25 <br>Week</p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4 col-4  ">
        <p class="text-center  text-white" >25 <br>Month</p>
      </div>
    </div>  
    </div>
   </div>




  

 </div>

  <div class="row">
  <div class="col-md-6 col-lg-6">
    <div class="row">
      <div class="col-xl-6 col-sm-12 mb-3">
        <div class="card text-white bg-primary o-hidden ">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-comments"></i>
            </div>
            <div class="">26 Transfer to Authorized!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>

      <div class="col-xl-6 col-sm-12 mb-3">
        <div class="card text-white bg-warning o-hidden ">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-list"></i>
            </div>
            <div class="">11 Authorized Transfer!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>

      <div class="col-xl-6 col-sm-12 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-shopping-cart"></i>
            </div>
            <div class="">123 Locations/Sites!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>

      <div class="col-xl-6 col-sm-12 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-life-ring"></i>
            </div>
            <div class="mr-5">13 Wirehouses/bines!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-6 col-sm-12 mb-3">
        <div class="card text-white bg-info o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-tools"></i>
            </div>
            <div class="mr-5">257 Tools!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-6 col-sm-12 mb-3">
        <div class="card text-white  o-hidden h-100" style="background: #8636F3">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-toolbox"></i>
            </div>
            <div class="mr-5">12 Toolkits!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-6 col-sm-12 mb-3">
        <div class="card text-white  o-hidden h-100" style="background: #45ABA4">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-align-center"></i>
            </div>
            <div class="mr-5">109 Categories!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-6 col-sm-12 mb-3">
        <div class="card text-white o-hidden h-100" style="background:#457FAB" >
          <div class="card-body">
            <div class="card-body-icon">
            <i class="fas fa-users"></i>
            </div>
            <div class="mr-5">21 Users!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>

    </div>
    </div>
    <div class="col-md-6 col-lg-6">
      <div class=" w-100  card" style="background:  #E5E7E9;" >
            <p id="curve_chart" style=" height: 400px;width: 100%;"></p>
          </div>
    </div>
  </div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

   <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable(
        [
          ['Year', 'Sales'],
          ['2004',  10],
          ['2005',  2],
          ['2006', 30],
          ['2007',  5],
          ['2007',  35]
        ]
       
        );

        var options = {
          title: 'Time Table',
          // curveType: 'none',
          backgroundColor:'none',
          legend: { position: 'bottom' },
          curveType: 'none',
          pointSize: 7,
          dataOpacity: 0.7,
          hAxis: {
          title: 'Horizotal'
        },
        vAxis: {
          title: 'vertical text'
        }


        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
@endsection