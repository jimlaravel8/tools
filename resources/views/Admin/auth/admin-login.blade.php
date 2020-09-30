<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="icon" type="image/ico" href="{{asset('img/favicon.png')}}" />

</head>
<body class="bg-dark">
  <div id="page-content-wrapper" >

      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a href="{{url('/')}}"><img class="mt-2 ml-5" height="30" width="200" src="{{asset('Admin/images/add_cast.png')}}"></a>
      </nav>
     
 </div>
 
  <div class="container mt-5">
        @if(session()->has('successMessage'))
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-danger">Error</span> {{ session()->get('successMessage') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
  	<div class="shadow col-md-6 m-auto p-4 card">
    <div class="login-form">
        <form action="{{route('adminLoginPost')}}" method="POST">
            <div class="title">Sign In</div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="email" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required="true">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
        </form>
    </div>
    </div>
   </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>