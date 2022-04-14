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
	$filename = $_FILES['image']['name'];
	$src = $_FILES['image']['tmp_name'];
	$des = "../../models/retailerupload/".$_FILES['image']['name'];


	if($name != null && $email != null && $username != null && $password != null && $phoneNumber != null && $gen != null){

		move_uploaded_file($src, $des);
		$status = createpending($name,$username ,$password,$nidNumber, $email, $phoneNumber, $gen, $licNumber,$filename);
		if ($status) {
			header('location: ../../views/retailerViews/retailerCreateAccount.php?msg=done');
		}
		else{
			header('location: ../../views/retailerViews/retailerCreateAccount.php?msg=falied');
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