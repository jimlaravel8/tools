
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right sidebar-bg" id="sidebar-wrapper" >
      <!-- <div class="sidebar-heading">Start Bootstrap </div> -->
      <ul class="list-group list-group-flush" >
      <li class="bottom-red-border">
        <a href="{{route('homePage')}}" class="list-group-item  text-light menu-a-bg" >
        <i class="fas fa-home"></i> Dashboard </a> 
        </li>

       <li class="bottom-red-border ">

        <a href="#" class="list-group-item  text-light menu-a-bg" data-toggle="collapse" data-target="#demo1"><i class="far fa-paper-plane"></i> Inventory <i class="fa fa-fw fa-caret-down"></i></a>

           <ul  id="demo1" class="collapse list-group">
           <li class="hello">
           <a  class="list-group-item   pl-5 text-secondary hover-effect category" href="{{url('/manage-stock-choice')}}"><i class="fas fa-plus-square"></i> Manage Stock</a>
           </li>
           <li>
           <a class="list-group-item  pl-5 text-secondary hover-effect category1" href="{{url('/view-product')}}"><i class="fas fa-eye"></i> Current Stock</a>
          </li>
           <li>
           
         </ul>

      </li>

     <!--  <li class="bottom-red-border">
        <a href="#" class="list-group-item text-light menu-a-bg" data-toggle="collapse" data-target="#demo2"><i class="fas fa-users"></i> Vendors <i class="fa fa-fw fa-caret-down"></i></a>

         <ul  id="demo2" class="collapse list-group">
           <li>
           <a class="list-group-item hover-effect  pl-5 text-secondary category3" href="{{url('/add-vendor')}}"><i class="fas fa-user-plus"></i> Add Vendor</a>
           </li>
           <li>
           <a class="list-group-item hover-effect pl-5 text-secondary category4" href="{{url('/vendor-list')}}"><i class="fas fa-eye"></i> View Vendor</a>
          </li>
         </ul>

      </li> -->

        <li class="bottom-red-border">
        <a href="#" class="list-group-item text-light menu-a-bg" data-toggle="collapse" data-target="#demo3"><i class="fas fa-sitemap"></i> Tools <i class="fa fa-fw fa-caret-down"></i></a>

         <ul  id="demo3" class="collapse list-group">
          <!--  <li>
           <a class="list-group-item hover-effect  pl-5 text-secondary category5" href="{{url('/add-category')}}"><i class="fas fa-user-plus"></i> Add category</a>
           </li>
           <li>
           <a class="list-group-item hover-effect pl-5 text-secondary category6" href="{{url('/view-category')}}"><i class="fas fa-eye"></i> View category</a>
          </li> -->
         </ul>

      </li>

      <li class="bottom-red-border">
        <a href="{{route('adminLte')}}" class="list-group-item  text-light menu-a-bg"><i class="fas fa-file-signature"></i> Contact List</a>
      </li class="bottom-red-border">

       <li class="bottom-red-border">
        <a href="{{route('addUser')}}" class="list-group-item  text-light menu-a-bg"><i class="fas fa-file-signature"></i> Users</a>
      </li class="bottom-red-border">

<!-- 
      <li class="bottom-red-border">
        <a href="#" class="list-group-item  text-light menu-a-bg "><i class="fas fa-id-card-alt"></i> Profile</a>
      </li>
      <li class="bottom-red-border">
        <a href="#" class="list-group-item  text-light menu-a-bg"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li> -->
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->

  

