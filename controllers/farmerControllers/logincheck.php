<?php 
session_start();

if(isset($_REQUEST['submit']))
{
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if($username != null && $password != null){
		

		$file = fopen('../../models/farmerlogin.txt', 'r');


		while (!feof($file)) {
			$user = fgets($file);
			$abc = explode('|', $user);

			if(trim($abc[2]) == $username && trim($abc[3]) == $password){
				setcookie('status', 'true', time()+300, '/');
				header('location: ../../views/farmerViews/farmerHome.php');
			}
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