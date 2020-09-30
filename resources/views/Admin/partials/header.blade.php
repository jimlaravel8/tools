<div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary ">
      	<a href="{{url('/')}}"><img class="mr-5" src="" height="50" alt="Company LOGO "></a>
        <button class="btn  " id="menu-toggle" ><span class="navbar-toggler-icon " ></span></button>
      
    <div class="dropdown ml-auto mt-2 mt-lg-0">
  <button class="btn text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <i class="fas fa-user-circle fa-fw"></i> {{ Auth::user()->name }}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
   <!--  <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a> -->
  </div>
</div>   
      </nav>
     
 </div>