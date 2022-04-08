<?php 
session_start();
require('../../../models/Executive_info.php');

if(isset($_REQUEST['submit']))
{
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if($username != null && $password != null){
		$status = login($username,$password);
		if($status)
		{
			$_SESSION['status'] = "true";
			$_SESSION['Executive_username'] = $username;
			setcookie('status', 'true', time()+9000, '/');
			header('location: ../../../views/AdminViews/Executive/ExcutiveHome.php');
		}
		else
		{
			header('location: ../../../views/AdminViews/Executive/Login.php?msg=error');

		}


		

		/*$file = fopen('../../../models/Exlogin.txt', 'r');


		while (!feof($file)) {
			$user = fgets($file);
			$abc = explode('|', $user);

			if(trim($abc[0]) == $username && trim($abc[1]) == $password){
				setcookie('status', 'true', time()+300, '/');
				header('location: ../../../views/AdminViews/Executive/ExcutiveHome.php');
			}
		}
		
		echo "Invalid username/password";
*/
	}
	else{
		echo "null submission ....";
	}
}
else{
	echo "Enter username name and password 1st";
}

?>