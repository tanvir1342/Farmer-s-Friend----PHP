<?php 
session_start();

if(isset($_REQUEST['submit'])){
	
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$username = $_REQUEST['username'];
    $pasword = $_REQUEST['pasword'];
	$phoneNumber = $_REQUEST['phoneNumber'];
	$gen = $_REQUEST['gen'];

	if($name != null && $email != null && $username != null && $pasword != null && $phoneNumber != null && $gen != null){

		$user =$name."|".$email."|".$username."|".$pasword."|".$phoneNumber."|".$gen."\r\n";
		$file = fopen('../../models/farmerlogin.txt', 'w');
		fwrite($file, $user);
		
		header('location: ../../views/farmerViews/login.php');

	}else{
		echo "null submission ....";
	}
}

?>