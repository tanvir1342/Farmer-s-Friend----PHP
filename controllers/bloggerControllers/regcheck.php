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


	if($name != null && $email != null && $username != null && $pasword != null && $phoneNumber != null && $gen != null){

		$user =$id."|".$name."|".$email."|".$username."|".$pasword."|".$phoneNumber."|".$gen."\r\n";
		$file = fopen('../../models/bloglogin.txt', 'w');
		fwrite($file, $user);
		
		header('location: ../../views/bloogerViews/Login.php');

	}else{
		echo "null submission ....";
	}
}

?>