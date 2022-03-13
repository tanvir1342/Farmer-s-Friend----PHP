<?php 
session_start();

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$email = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$name = $_REQUEST['phoneNumber'];
	$name = $_REQUEST['nidNumber'];
	$name = $_REQUEST['gen'];
	$name = $_REQUEST['gen'];
	$name = $_REQUEST['gen'];
	$name = $_REQUEST['gen'];
	$name = $_REQUEST['gen'];
	$name = $_REQUEST['gen'];
	$name = $_REQUEST['gen'];
	$name = $_REQUEST['gen'];


	if($username != null && $password != null && $email != null){
		

		$user = $id."|".$name."|".$email."|".$username."|".$pass."\r\n";
		$file = fopen('user.txt', 'w');
		fwrite($file, $user);
		
		header('location: login.php');

	}else{
		echo "null submission ....";
	}
}

?>