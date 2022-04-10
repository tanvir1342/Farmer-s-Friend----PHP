<?php 
session_start();
require('../../../models/farmer_info.php');

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$phoneNumber = $_REQUEST['phoneNumber'];
	$farmer_type = $_REQUEST['farmerType'];
	$gen = $_REQUEST['gen'];
	$nid = $_REQUEST['nidNumber'];
	$filename = $_FILES['image']['name'];
	$src = $_FILES['image']['tmp_name'];
	$des = "../../../models/Farmerupload/".$_FILES['image']['name'];

	if($username != null && $password != null && $name != null && $email != null && $phoneNumber != null && $farmer_type !=null && $gen != null && $nid !=null)
	{
		move_uploaded_file($src, $des);
		$status = create ($username,$password,$name,$email,$phoneNumber,$farmer_type,$gen,$nid,$filename);
		
		if($status)
		{
			header('location: ../../../views/AdminViews/Executive/createFarmer.php?msg=done');
		}
		else
		{
			header('location: ../../../views/AdminViews/Executive/createFarmer.php?msg=failed');
		}


	}else{
		echo "null submission ....";
	}
}

if (isset($_POST['username']) && $_POST['username'] !=null) {
	$username = $_POST['username'];
	$chk = checkusername($username);
	if ($chk) {
		echo "username not available";
	}
	else{

	}
}

if (isset($_POST['email']) && $_POST['email'] !=null) {
	$email = $_POST['email'];
	$chk = checkemail($email);
	if ($chk) {
		echo "Email already used";
	}
	else{
	    	
	}
}

?>