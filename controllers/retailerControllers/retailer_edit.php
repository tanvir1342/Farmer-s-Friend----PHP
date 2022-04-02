<?php 
session_start();
require('../../models/Retailer_info.php');
$usernameold = $_SESSION['Retailer_username'];
if(isset($_REQUEST['submit'])){
	
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
	$phoneNumber = $_REQUEST['phoneNumber'];
	$gen = $_REQUEST['gen'];
	$licNumber = $_REQUEST['licNumber'];
	$nidNumber = $_REQUEST['nidnumber'];


	if($name != null && $email != null && $username != null && $password != null && $phoneNumber != null && $gen != null && $licNumber != null)

		{

		$status = edit($name,$username ,$password,$nidNumber, $email, $phoneNumber, $gen, $licNumber, $usernameold);
		if($status)
		{
			$_SESSION['Retailer_username'] = $username;
			header('location: ../../views/retailerViews/retailerHome.php?msg=updated');
		}
		else
		{
			header('location: ../../views/retailerViews/retailerEditAccount.php');
		}
	}



	else{
		echo "null submission ....";
	}

}

?>