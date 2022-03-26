<?php 
session_start();
require('../../models/farmer_info.php');
$usernameold = $_SESSION['Farmer_username'];

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$phoneNumber = $_REQUEST['phoneNumber'];
	$farmer_type = $_REQUEST['farmerType'];
	$gen = $_REQUEST['gen'];
	$nid = $_REQUEST['nidNumber'];
	// $photo = $_REQUEST['file'];

	if($username != null && $password != null && $name != null && $email != null && $phoneNumber != null && $farmer_type !=null && $gen != null && $nid !=null)
	{

		$status = edit ($username,$password,$name,$email,$phoneNumber,$farmer_type,$gen,$nid,$usernameold);
		if($status)
		{
			$_SESSION['Farmer_username'] = $username;
			header('location: ../../views/farmerViews/farmerHome.php?msg=updated');
		}
		else
		{
			header('location: ../../views/farmerViews/farmerHome.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>