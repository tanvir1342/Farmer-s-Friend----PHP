<?php 
session_start();
require('../../models/Retailer_info.php');

if(isset($_REQUEST['submit']))
{
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if($username != null && $password != null){
		$status = login($username,$password);
      if ($status) {
      	$_SESSION['Retailer_username'] = $username;
      	$_SESSION['status'] = "true";
			
			setcookie('status', 'true', time()+9000, '/');
      	header('location: ../../views/retailerViews/retailerHome.php');
      }
		else{
			echo "Invalid username/password";
		}
		

	}
	else{
		echo "null submission ....";
	}
}
else{
	echo "Enter username name and password 1st";
}

?>