<?php 
session_start();
require('../../models/Executive_info.php');
$usernameold = $_SESSION['Executive_username'];

if(isset($_REQUEST['submit'])){
	
	$Name = $_REQUEST['Name'];
	$username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $gender = $_REQUEST['gender'];
    $age = $_REQUEST['age'];
    $salary = $_REQUEST ['salary'];
    $joining_date = $_REQUEST['joining_date'];

	// $photo = $_REQUEST['file'];

	if($Name != null && $username != null && $password != null && $email != null && $gender != null && $age != null && $salary  != null &&  $joining_date  != null)
	{

		$status = edit ($Name,$username,$password,$name,$email,$gender,$age,$salary,$joining_date,$usernameold);
		if($status)
		{
			$_SESSION['Farmer_username'] = $Name;
			header('location: ../../views/AdminViews/Executive/ExcutiveHome.php?msg=updated');
		}
		else
		{
			header('location: ../../views/AdminViews/Executive/ExcutiveHome');
		}


	}else{
		echo "null submission ....";
	}
}

?>