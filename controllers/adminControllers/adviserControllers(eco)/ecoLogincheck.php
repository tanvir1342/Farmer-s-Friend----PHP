<?php 
session_start();
require('../../../models/adviser(eco)_info.php');

if(isset($_REQUEST['submit']))
{
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if($username != null && $password != null){
		
		   $status = login($username,$password);

		   if($status)
		    {
				$_SESSION['status'] = "true";
				$_SESSION['adviser_eco_username'] = $username;
				setcookie('status', 'true', time()+300, '/');
				header('location: ../../../views/AdminViews/Adviser(Econmoic)/AddviserHome(eco).php');
		    }
		
		echo "Invalid username/password";

	}
	else{
		echo "null submission ....";
	}
}
else{
	echo "Enter username name and password 1st";
}

?>