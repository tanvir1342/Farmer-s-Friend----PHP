<?php 
session_start();
require('../../models/farmer_info.php');

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

		/*$user =$name."|".$email."|".$username."|".$pasword."|".$phoneNumber."|".$gen."\r\n";
		$file = fopen('../../models/farmerlogin.txt', 'w');
		fwrite($file, $user);
		
		header('location: ../../views/farmerViews/login.php');*/

		$status = create ($username,$password,$name,$email,$phoneNumber,$farmer_type,$gen,$nid);
		if($status)
		{
			header('location: ../../views/farmerViews/login.php?msg=success');
		}
		else
		{
			header('location: ../../views/farmerViews/farmerCreateAccount.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>