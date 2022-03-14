<?php 
session_start();

if(isset($_REQUEST['submit'])){
	
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$username = $_REQUEST['username'];
    $pasword = $_REQUEST['pasword'];
	$phoneNumber = $_REQUEST['phoneNumber'];
	$gen = $_REQUEST['gen'];
	$id = $_REQUEST['id'];
	$licNumber = $_REQUEST['licNumber'];


	if($name != null && $email != null && $username != null && $pasword != null && $phoneNumber != null && $gen != null){

		$user =$id."|".$name."|".$email."|".$username."|".$pasword."|".$phoneNumber."|".$gen."|".$licNumber."\r\n";
		$file = fopen('../../models/ritlogin.txt', 'w');
		fwrite($file, $user);
		
		header('location: ../../views/retailerViews/login.php');

	}else{
		echo "null submission ....";
	}
}

?>