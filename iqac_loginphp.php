<?php
require_once('dbconnect.php');
session_start();



if(isset($_POST['login']))
{
	
	$logintype 		= mysqli_real_escape_string($conn,$_POST['logintype']);
	$user		= mysqli_real_escape_string($conn,$_POST['username']);
	$password 	= mysqli_real_escape_string($conn,$_POST['password']);
	
  	
		$sql = "SELECT * FROM users WHERE type='".$logintype."' AND username='".$user."' AND password='".$password."'";  
		$result = $conn->query($sql);
		$numrows = mysqli_num_rows($result);  
		if($numrows!=0)  
		{  
			while($row = $result->fetch_assoc())  
			{  	
				$dbtype=$row['Type'];
				$dbusername = $row['Username'];  
				$dbpassword = $row['Password'];  
				$dbfname=$row['First_name'];
				$dblname=$row['Last_name'];
			
			
				if($logintype == $dbtype && $user == $dbusername && $password == $dbpassword)  
				{  
					if($logintype == 'Admin')
					{
						$_SESSION['username'] = $_POST['username'] ;
						$_SESSION['fname']=$dbfname;
						$_SESSION['lname']=$dblname;
						
						echo "<script type='text/javascript'>
						alert('Admin Login sucessfull. " . $_SESSION['username']." ' );
						window.location='iqac_admin.php';
						</script>";
						
					}
					else
					{
						
						$_SESSION['username'] = $_POST['username'] ;
						$_SESSION['fname']=$dbfname;
						$_SESSION['lname']=$dblname;
						
						echo "<script type='text/javascript'>
						alert('User Login sucessfull. " . $_SESSION['username']." ' );
						window.location='iqac_dashboard.php';
					</script>";}
				} 
				else
				{				
					
					echo "<script type='text/javascript'>
						alert('Login unsucessfull.');
						window.location='iqac_login.html';
						</script>";
				}
			}
		
}
}
	
	
	
	
?>