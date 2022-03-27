<?php
session_start();
require('../../../models/adviser(eco)_info.php');

 $usernameold =$_SESSION['adviser_eco_username'];
 if(isset($_REQUEST['submit'])){
	
	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
	$email = $_REQUEST['email'];
	$gender = $_REQUEST['gender'];
	$age = $_REQUEST['age'];

	if($username != null && $name != null && $email != null && $gender != null && $age !=null)
	{
		$status = editprofile($username,$name,$password,$email,$gender,$age,$usernameold);
		if ($status) {
			 header('location: ../../../views/AdminViews/Adviser(Econmoic)/EditProfile.php?msg=updated');
		}
		else
		{
			header('location: ../../../views/AdminViews/Adviser(Econmoic)/EditProfile.php?msg=failed');

		}
	}
	else
	{
		echo "null submission";
	}
}

?>