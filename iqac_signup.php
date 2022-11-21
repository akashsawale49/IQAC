<?php
require_once('dbconnect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Signup</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="iqac.css" >
</head>

<body>
<div class="container">
	
<div class="row" style="background-color :  rgb(27,27,27)">
    

<div class="col-sm|md|lg|xl-2">
	<img class="img-fluid" src="SPIT_logo.png" width="100%" alt="spitlogo" > 
</div>
<div class="col-sm|md|lg|xl-8">
	<img class="img-fluid" src="logo.gif" width="100%" alt="logo">
</div>

      
</div>	
	
	
	<br><br>
	
	<h1>Fill the form and details to signup for IQAC submissions</h1>
	<br><br>

	<div class="jumbotron jumbo ">
	
				
    
	<form action="iqac_signupphp.php"  method="post" >
	<div class="row ">
				
				<div class="col-md-3">
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>   First Name : </span>
					<input class="form-control form-control-lg" type="text" name="fname" id="fname" placeholder="Enter First name" >
				</div>
				<div class="col-md-3">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>   Last Name : </span>
					<input class="form-control form-control-lg" type="text" name="lname" id="lname" placeholder="Enter Last name" >
	
				</div>
				<div class="col-md-3">
					
			<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>  Email id: </span>
			<input class="form-control form-control-lg" type="text" name="email" id="email" placeholder="Enter email id" >
					 
				</div>
				
				<div class="col-md-3">
					<span class="label-input100"><span class="glyphicon glyphicon-asterisk"></span>   Login type :</span>
					<div>
						
						<select class="dropdown btn btn-lg btn-outline-primary" name="logintype" id="Logintype"required>
						<option>Student</option>
						<option>Teacher</option>
						<option>Non-teaching Staff</option>
						<option>Committee</option>
						<option>Admin</option>
					  </select>
						 
					</div>
					</div>
				</div>
			
				<br><br>
	<div class="row">
				
				<div class="col-md-3">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>  Username : </span>
					<input class="form-control form-control-lg" type="text" name="username" id="username" placeholder="Enter Username" >
				</div>
				<div class="col-md-3">
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>  Password: </span>
					<input class="form-control form-control-lg" type="password" name="password" id="password" placeholder="Enter Password" >
				</div>
				<div class="col-md-3">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>  Confirm Password: </span>
					<input class="form-control form-control-lg" type="password" name="confirmpassword" id="confirmpassword" placeholder="Enter Password" >
					 </div>
			
	
	
				<div class="col-md-3">
					<span class="label-input100"><span class="glyphicon glyphicon-user"></span>    Department : </span>
					<div>
					<select class="dropdown btn btn-lg btn-outline-primary" name="department" id="department" >
						<option>Electronics Engineering</option>
						<option>Electronics and Telecommunications Engineering</option>
						<option>Computer Engineering</option>
						<option>Information Technology Engineering</option>
						<option>Masters in Computer Applications</option>
						<option>Applied Science and Humanities</option>
						<option>PHD Centre</option>						
					  </select>
					 <br>
					</div>
					</div>
				</div>
				
				
				

	
	<br><br>
	<div class="row">
	
	<div class="col-md-4">
						<button type="button submit" class="btn btn-outline-success btn-block btn-lg" role="button"  name="submitdet" >SUBMIT</button></form>
	<div class="col-md-4"> 
						<a type="button " class="btn btn-outline-danger btn-block btn-lg" href="iqac_login.html"> <i class="fa fa-ban" aria-hidden="true"></i>   CANCEL</a>
						</div>
						
	
					
				</div>
					
					
				
				</div>
				</div>
	<br><br>
	
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<div id="footer" class="text-center container"  style="background-color : #4d4d4d"  style="color : white" >

<p>
<a href='http://www.spit.ac.in/'  style="color : white" >Home</a> | 
<a href='http://www.aicte-india.org/' target='_blank'  style="color : white" >AICTE</a> | 
<a href='http://www.mu.ac.in/' target='_blank'  style="color : white" >Mumbai University</a> | 
<a href='http://www.dtemaharashtra.gov.in/' target='_blank'  style="color : white">DTE</a> |
<a href='http://www.spit.ac.in/wp-content/uploads/SPITVirtualTour/SPIOT_Templates/SPIOTFL' target='_blank'  style="color : white" >Campus Virtual Tour</a> |  
<a href='http://mail.spit.ac.in'  style="color : white" >Webmail</a> | 
<a href='http://www.spit.ac.in/about/contact/'  style="color : white" >Contact</a> | 
</p>

<p>
<a href='http://www.spit.ac.in/terms-conditions/' style="color : white">Terms & Conditions</a> |
<a href='http://www.spit.ac.in/privacy-policy/' style="color : white">Privacy Policy</a> |
<a href='http://www.spit.ac.in/refund-cancellation-policy/' style="color : white">Refund/Cancellation Policy</a>
</p>

<p  style="color : white" >Bharatiya Vidya Bhavans Sardar Patel Institute of Technology
Munshi Nagar, Andheri (West), Mumbai 400 058</p>
<p  style="color : white">(91)-(022)-26707440, 26287250</p>
</div>

<link rel='stylesheet' id='metaslider-nivo-slider-css'  href='https://www.spit.ac.in/wp-content/plugins/ml-slider/assets/sliders/nivoslider/nivo-slider.css?ver=3.8.1' type='text/css' media='all' property='stylesheet' />
<link rel='stylesheet' id='metaslider-public-css'  href='https://www.spit.ac.in/wp-content/plugins/ml-slider/assets/metaslider/public.css?ver=3.8.1' type='text/css' media='all' property='stylesheet' />
<link rel='stylesheet' id='metaslider-nivo-slider-default-css'  href='https://www.spit.ac.in/wp-content/plugins/ml-slider/assets/sliders/nivoslider/themes/default/default.css?ver=3.8.1' type='text/css' media='all' property='stylesheet' />
<script type='text/javascript' src='https://www.spit.ac.in/wp-includes/js/comment-reply.min.js?ver=6154f1880aa6d14f29adeecc41604cc9'></script>
<script type='text/javascript' src='https://www.spit.ac.in/wp-content/plugins/page-links-to/js/new-tab.min.js?ver=2.10.4'></script>
<script type='text/javascript' src='https://www.spit.ac.in/wp-includes/js/hoverIntent.min.js?ver=1.8.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var megamenu = {"timeout":"300","interval":"100"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.spit.ac.in/wp-content/plugins/megamenu/js/maxmegamenu.js?ver=2.5'></script>
<script type='text/javascript' src='https://www.spit.ac.in/wp-includes/js/wp-embed.min.js?ver=6154f1880aa6d14f29adeecc41604cc9'></script>
<script type='text/javascript' src='https://www.spit.ac.in/wp-content/plugins/ml-slider/assets/sliders/nivoslider/jquery.nivo.slider.pack.js?ver=3.8.1'></script>




	
	
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	
</html>