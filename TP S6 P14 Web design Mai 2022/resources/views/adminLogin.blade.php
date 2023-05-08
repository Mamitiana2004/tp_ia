 
<!DOCTYPE HTML>
<html>
<head>
<title>L'Intelligence Artificielle</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="admin/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="admin/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="admin/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<!--link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'-->
<!--link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'-->
<!--static chart-->
</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
 
				<h2 style="color:red;"><?php 
                $mas= Session::get('massage');
                 if($mas){
                     echo $mas;
                     Session::put('massage',null);
                  }
				?></h2>
			<div class="login-block">

				<form action="{{url('/admin_beshbord')}}" method="post">
			{{csrf_field()}}
			
					<input type="text" name="admin_email" placeholder="Email" value="admin@gmail.com" required="">
					<input type="password" name="admin_password" class="lock" value="admin" placeholder="Password">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							 
						</div>
						<div class="forgot">
							 
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Login">	
					
				</form>
 
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>L'Intelligence Artificielle</p>
</div>	
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
		<script src="{{asset('admin/js/scripts.js')}}"></script>
		<!--//scrolling js-->
<script src="{{asset('admin/js/bootstrap.js')}}"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
