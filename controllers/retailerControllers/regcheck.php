<?php 
session_start();
require('../../models/Retailer_info.php');

if(isset($_REQUEST['submit'])){
	
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
	$phoneNumber = $_REQUEST['phoneNumber'];
	$gen = $_REQUEST['gen'];
	$nidNumber = $_REQUEST['nidNumber'];
	$licNumber = $_REQUEST['licNumber'];


	if($name != null && $email != null && $username != null && $password != null && $phoneNumber != null && $gen != null){

		$status = createpending($name,$username ,$password,$nidNumber, $email, $phoneNumber, $gen, $licNumber);
		if ($status) {
			header('location: ../../views/retailerViews/retailerCreateAccount.php?msg=done');
		}
		else{
			//header('location: ../../views/retailerViews/login.php?msg=falied');
		}

	}else{
		echo "null submission ....";
	}
}

?>