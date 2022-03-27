<?php 
session_start();
require('../../models/Blogger_info.php');

if(isset($_REQUEST['submit']))
{
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if($username != null && $password != null)
	{
		$status = login($username,$password);
		if($status)
		{
			$_SESSION['status'] = true;
			$_SESSION['Blogger_username'] = $username;
			setcookie('status', 'true', time()+300, '/');
			header('location: ../../views/bloogerViews/bloggerHome.php');
		}
		else
		{
			header('location: ../../../views/bloggerHome.php');
		}

		/*$file = fopen('../../models/bloglogin.txt', 'r');

		while (!feof($file)) {
			$user = fgets($file);
			$abc = explode('|', $user);

			if(trim($abc[3]) == $username && trim($abc[4]) == $password){
				setcookie('status', 'true', time()+300, '/');
				header('location: ../../views/bloogerViews/bloggerHome.php');
			}
		}
		
		echo "Invalid username/password";

	}
	*/
}else{
			echo "null submission";
		}
	}
?>