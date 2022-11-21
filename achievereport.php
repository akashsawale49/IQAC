<?php
require_once('dbconnect.php');
session_start();
	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Achievement report</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<div class="col-md-6 ">
	<div  class="row">
	<div class="col-md-10">
	<h1 style = "color:white; " > Welcome <?php  echo $_SESSION['fname'];?>  <?php  echo  $_SESSION['lname'];    ?> </h1>
	<h1 style = "color:white; " > Username :  <?php  echo $_SESSION['username'];?>   </h1>
	
</div>
		
		
		
		<div class="col-md-2" style="margin:auto; padding: 25px; ">
						<a  class="btn btn-danger btn-lg"  role="button" href="logout.php"> <i class="fa fa-ban" aria-hidden="true"></i> Logout</a>
						</div>
		</div>
</div>
      
</div>
	
	
	<br><br>
	
	
	
	<div class="jumbotron jumbo" id="div">
	<div id='elem'>
	
	
	<table  class="table" style="font-size:30px" >
    <thead>
      <tr>
        <th>Fields</th>
        <th>Inputs</th>
      </tr>
	  </thead>
	  
	  <tbody> 
		<tr>
        <td>Date</td>
        <td><?php echo $_SESSION['date'] ?>	</td>
        </tr>
		<tr>
        <td>Type of Achievement </td>
        <td><?php echo $_SESSION['typeofachievement'] ?></td>
        </tr>
		<tr>
        <td>Name of Achievement </td>
        <td> <?php echo $_SESSION['nameofachievement'] ?></td>
        </tr>
		<tr>
        <td>Prize </td>
        <td><?php echo $_SESSION['prize'] ?></td>
        </tr>
		<tr>
        <td>Reward/Award</td>
        <td><?php echo $_SESSION['reward'] ?></td>
        </tr>
		<tr>
        <td>National/International Event</td>
        <td><?php echo $_SESSION['nat'] ?></td>
        </tr>
		<tr>
        <td>Name of Department</td>
        <td><?php echo $_SESSION['department'] ?></td>
        </tr>
		<td>Photo</td>
        <td><?php echo "<img src=".$_SESSION['file']." width=75% />"; ?></td>
        </tr>
		
		</tbody>
	</table>
	</div>
	
	<br><br>
	<div class="row">
	<div class="col-md-4">
		<button  type="button" class="btn btn-success btn-lg" name="print" id="print" onclick="printFunc('elem')" ><i class="fa fa-sign-in" aria-hidden="true"></i> Print the page.</button></div>
	
			<div class="col-md-4">
		<a href="iqac_dashboard.php" type="button" class="btn btn-danger btn-lg" name="cancel" ><i class="fa fa-sign-in" aria-hidden="true"></i> Go to Dashboard. </a>
	</div>
	
	</div>
	
	</div>
	
	<script type="text/javascript">
				
function printFunc(id) {
    var divToPrint = document.getElementById(id);
    var htmlToPrint = '' +
        '<style type="text/css">' +
        'table th, table td {' +
        'border:1px solid #000;' +
        'padding;0.5em;' +
        '}' +
        '</style>';
    htmlToPrint += divToPrint.outerHTML;
    newWin = window.open("");
    newWin.document.write("<h3 align='center'>Print Page</h3>");
    newWin.document.write(htmlToPrint);
    newWin.print();
    newWin.close();
    }
	</script>				
	
		
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