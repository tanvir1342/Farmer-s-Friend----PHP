<?php 
session_start();
require('../../models/Blogger_info.php');
$usernameold = $_SESSION['Blogger_username'];

if(isset($_REQUEST['submit'])){
	
	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
	$email = $_REQUEST['email'];
	$gender = $_REQUEST['gender'];
	$phone = $_REQUEST['phone'];
	// $photo = $_REQUEST['file'];

	if($name != null && $username != null && $password != null &&  $email != null && $gender != null && $phone != null)
	{

		$status = edit ($name,$username,$password,$email,$gender,$phone,$usernameold);
		if($status)
		{
			$_SESSION['Blogger_username'] = $username;
			header('location: ../../views/bloogerViews/bloggerHome.php?msg=updated');
		}
		else
		{
			header('location: ../../views/bloogerViews/bloggerHome.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>