<?php
require_once('dbconnect.php');
session_start();
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Events</title>	
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
    

	<div class="col-sm|md|lg|xl-2 ">
		<img class="img-fluid" src="SPIT_logo.png" width="100%" alt="spitlogo" > 
	</div>
	<div class="col-md-4 " style="padding:10px">
		<img class="img-fluid" src="logo.gif" width="100%" alt="logo">
	</div>
	<div class="col-md-6 " >
	<div  class="row">
	<div class="col-md-8" >
	<h1 style = "color:white; " > Welcome  <?php  echo $_SESSION['fname'];?>  <?php  echo  $_SESSION['lname'];    ?> </h1>
		<h1 style = "color:white; " > Username :  <?php  echo $_SESSION['username'];?>   </h1>
</div> 
		
	
	<div class="col-md-4" style="margin:auto;  ">
		<div class="col-md-6" style="margin:auto; ">
		<a  class="btn btn-outline-danger btn-lg "  role="button" href="logout.php"> <i class="fa fa-ban" aria-hidden="true"></i> Logout</a>
		</div>
		<div class="col-md-6" style="margin:auto; ">
		<a  class="btn btn-outline-danger btn-lg "  role="button" href="update.php"> <i class="fa fa-ban" aria-hidden="true"></i> Update Profile</a>
		</div>
		</div>
	</div>
</div>
      
</div>
	
	
	
	
	<br><br>
	
	<h1><b>Fill the form and details about the Event</h1></b>
	<br><br>
<form action="iqac_eventphp.php"  method="post" enctype="multipart/form-data" >
	<div class="jumbotron jumbo ">
	<div class="row ">
	<div class="col-md-4">
		<span class="label-input100"><span class="glyphicon glyphicon-calendar"></span>  Date :</span>
					<input class="form-control form-control-lg" type="date" name="date" placeholder="Enter Date">
					
				</div>
				<div class="col-md-4">
				
					<span class="label-input100"><span class="glyphicon glyphicon-time"></span>   Time From:</span>
					<input class="form-control form-control-lg" type="time" name="timefrom" placeholder="Enter Time From">
					 
					</div>
				<div class="col-md-4">
				
					<span class="label-input100"><span class="glyphicon glyphicon-time"></span>   Time To:</span>
					<input class="form-control form-control-lg" type="time" name="timeto" placeholder="Enter Time to">
					 
					
				
				</div>
				</div>
    
	<br><br>
	<div class="row ">
				<div class="col-md-4">
					<span class="label-input100"><span class="glyphicon glyphicon-map-marker"></span>   Place :</span>
					<div>
						
						<select class="dropdown btn btn-outline-dark btn-block btn-lg " id="place" name="place">
						<option>Department</option>
						<option>Institute</option>
						<option>Other Institute</option>
						</select>
						 
					
					</div>
				</div>
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>    Name of Event : </span>
					<input class="form-control form-control-lg" type="text" name="nameofevent" placeholder="Enter name of Event">
					 
				
				</div>
				<div class="col-md-4">
					<span class="label-input100"><span class="glyphicon glyphicon-asterisk"></span>   Type of Event :</span>
					<div>
						
						<select class="form-control dropdown btn btn-outline-dark btn-block btn-lg " id="prize" name="typeofevent">
						<option>1 Day</option>
						<option>2 Days</option>
						<option>1 Week</option>
						<option>2 Weeks</option>
					  </select>
						 
					
					</div>
				</div>
				</div>
				<br><br>
	<div class="row">
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-user"></span>    Resource person : </span>
					<input class="form-control form-control-lg" type="text" name="resourceperson" placeholder="Enter name of Person">
					 
				
				</div>
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>    Title of Event : </span>
					<input class="form-control form-control-lg" type="text" name="titleofevent" placeholder="Enter Title">
					 
				</div>
				
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>   Domain/Theme : </span>
					<input class="form-control form-control-lg" type="text" name="domain" placeholder="Enter Domain/Theme">
					 
				
					
				</div>
	</div>
	
	<br><br>
	<div class="row">
		<div class="col-md-4">
			<span class="label-input100"><span class="glyphicon glyphicon-user"></span>    Details of Event : </span>
			<input class="form-control form-control-lg" type="text" name="detail" placeholder="Enter Details of Event">		
				</div>
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>    Number of participants : </span>
					<input class="form-control form-control-lg" type="number" name="numberofp" placeholder="Enter Number of participants">
					 
				
				</div>
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>   Feedback : </span>
					<input class="form-control form-control-lg" type="text" name="feed" placeholder="Enter Feedback">
					
				</div>
	</div>
	<br><br>
	<div class="row ">
				<div class="col-md-6">
				   <span class="label-input100"><span class="glyphicon glyphicon-picture"></span>    Upload photos : </span>
					<input class="form-control-lg" type="file" name="image" class="form-control" >
					
				</div>
				
				<div class="col-md-6">
					
					<span class="label-input100"><span class="glyphicon glyphicon-user"></span>   Organizers : </span>
					<input class="form-control form-control-lg" type="text" name="organizer" placeholder="Enter name of organizer">
					 
				</div>
				
				
	</div>
	<br><br>
	<div class="row">
	
	<div class="col-md-2">
						
		<button type="button submit" class="btn btn-outline-success btn-block btn-lg" role="button"  name="login" >SUBMIT</button></div>
					
				
	<div class="col-md-2"> 
	<a type="button " class="btn btn-outline-danger btn-block btn-lg" href="iqac_dashboard.php">CANCEL</a>
						</div> 
	</form>
			</div>
	    
	
	</div>
		</form>
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