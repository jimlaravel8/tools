@extends('Admin.template.template')
@section('page_title')
Contact List
@endsection

@section('main_content')

<div class="container mt-2">
<div class="table-responsive">
<table class="col-md-12 table table-hover   table-condensed cf" id="myTable">
  <thead>
    <tr>
      <th >#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Designation</th>
      <th scope="col">Salary</th>
      <th scope="col">Phone number</th>
      <th scope="col">Birth Day</th>
      <th scope="col">Gender</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>

  	@for ($i = 1; $i <= 30; $i++)
   
    <tr>
      <td >{{$i}}</td>
      <td>Mark{{$i}}</td>
      <td>Otto{{$i}}</td>
      <td>@mdo{{$i}}</td>
      <td>20000{{$i}}</td>
      <td>01920298962{{$i}}</td>
      <td>{{$i}}/09/2018</td>
      <td>male</td>
        <td> <a href="#editEmp{{$i}}" class="p-2 text-warning" data-toggle="modal" ><i class="fas fa-edit"></i></a>
          <a href="#deleteEmp{{$i}}" class="p-2 text-danger" data-toggle="modal" ><i class="fas fa-trash-alt"></i></a>

          <!-- ==============edit modal Start==================== -->

          <div class="modal fade" id="editEmp{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title text-warning"  id="exampleModalLabel"><i class="fas fa-edit"></i> Edit Informations</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
               </div>
              <div class="modal-body">
                 <form class="form-sample" action="#" method="" enctype="multipart/form-data" id="addimg">
                     {{ csrf_field() }}
                  <div class="form-group">
                     <label for="emp_id">Employee Id</label>
                     <input type="text" class="form-control" id="emp_id" placeholder="Enter Employee Id" name="emp_id" value="{{$i}}" required>
                   </div>

                    <div class="form-group">
                      <label for="emp_first_name">Employee first name</label>
                      <input type="text" class="form-control" id="emp_first_name" placeholder="Enter Employee Last name" name="emp_first_name" value="Mark {{$i}}" required>
                    </div>
                      <div class="form-group">
                      <label for="emp_name">Employee Last name</label>
                      <input type="text" class="form-control" id="emp_last_name" placeholder="Enter Employee name" name="emp_last_name" value="Otto{{$i}}" required>
                    </div>
                     <div class="form-group">
                      <label for="emp_designation">Designation</label>
                      <input type="text" class="form-control" id="emp_designation" placeholder="Enter Employee Designation" name="emp_designation" value="@mdo{{$i}}" required>
                     </div>

                      <div class="form-group">
                      <label for="emp_salary">Salary</label>
                      <input type="text" class="form-control" id="emp_salary" placeholder="Enter Employee salary" name="emp_salary" value="20000{{$i}}" required>
                     </div>

                     <div class="form-group">
                      <label for="emp_phone">Phone</label>
                      <input type="text" class="form-control" id="emp_phone" placeholder="Enter Employee phone" name="emp_phone" value="01920298962{{$i}}" required>
                     </div>

                     <div class="form-group">
                      <label for="emp_birth">Birth date</label>
                      <input type="text" class="form-control" id="emp_birth" placeholder="Enter Employee address" name="emp_birth" value="{{$i}}/09/2018" required>
                     </div>

                     <div class="form-group">
                       <label for="emp_gender">Gender</label>
                       <select class="browser-default custom-select" name="emp_gender" required>
                       <option value="Male">male</option>
                       
                        <option value="Female">Female</option>
                      
                        </select>
                     </div>

                  
                      <div class="float-right">
                       <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Cancel</button>
                       <button type="submit" class="btn btn-outline-primary btn-sm">Update</button>
                      </div>
                     </form>
                    </div>
                  </div>
                 </div>
              </div>

          <!-- =============edit modal end========================= -->

            <!-- Delete Modal start -->
           <div class="modal fade" id="deleteEmp{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
              <div class="modal-header">

             <h5 class="modal-title" style="color:red;"  id="exampleModalLabel"><i class="fas fa-exclamation-triangle"></i> Delete confirmation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
           </button>
           </div>
         <div class="modal-body">
         Are you sure want to delete this?
                                   
         </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-outline-danger " data-dismiss="modal"><i class="fas fa-times"></i></button>
         <form class="form-sample" action="" method="">
              {{ csrf_field() }}
       <button type="submit" class="btn btn-outline-success "><i class="fas fa-check"></i></button>
            </form>

     </div>
     </div>
  </div>
  </div>
 <!-- Delete Modal end -->


       </td>
    </tr>
    @endfor

   
  </tbody>
</table>

</div>
<!-- table responsive -->

</div>
<!-- container -->
@endsection