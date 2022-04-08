<?php 
session_start();
require('../../models/farmer_info.php');

if(isset($_REQUEST['submit']))
{
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if($username != null && $password != null)
	{
		$status = login ($username,$password);
		if($status)
		{
			$_SESSION['status'] = "true";
			$_SESSION['Farmer_username'] = $username;
			setcookie('status', 'true', time()+1000, '/');
			header('location: ../../views/farmerViews/farmerHome.php');
		}
		else
		{
			header('location: ../../views/farmerViews/Login.php?msg=error');

		}

	}
	else
	{
		echo "null submission ....";
	}
}
else{
	echo "Enter username name and password 1st";
}

?>