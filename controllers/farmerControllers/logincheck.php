<?php 
session_start();
require('../../models/farmer_info.php');

if(isset($_REQUEST['submit']))
{
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

<<<<<<< HEAD
	if($username != null && $password != null){
		

		$file = fopen('../../models/farmerlogin.txt', 'r');


		while (!feof($file)) {
			$user = fgets($file);
			$abc = explode('|', $user);

			if(trim($abc[2]) == $username && trim($abc[3]) == $password){
				setcookie('status', 'true', time()+900, '/');
				header('location: ../../views/farmerViews/farmerHome.php');
			}
=======
	if($username != null && $password != null)
	{
		$status = login ($username,$password);
		if($status)
		{
			$_SESSION['status'] = "true";
			setcookie('status', 'true', time()+300, '/');
			header('location: ../../views/farmerViews/farmerHome.php');
		}
		else
		{
			header('location: ../../views/farmerViews/farmerHome.php');
>>>>>>> 6d766b814c8383f6a6a05dac1a731bdeac1e2e4b
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