<?php 
session_start();
require('../../../models/vet_info.php');
$usernameold = $_SESSION['vet_username'];

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
			$_SESSION['vet_username'] = $username;
			header('location: ../../../views/AdminViews/Veterinarian/VatHome.php?msg=updated');
		}
		else
		{
			header('location: ../../../views/AdminViews/Veterinarian/VatHome.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>