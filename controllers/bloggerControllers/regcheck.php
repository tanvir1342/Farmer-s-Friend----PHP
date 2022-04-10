<?php 
session_start();
require('../../models/Blogger_info.php');

if(isset($_REQUEST['submit'])){
	
	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
	$email = $_REQUEST['email'];
	$gender = $_REQUEST['gender'];
	$phone = $_REQUEST['phone'];
	$filename = $_FILES['image']['name'];
	$src = $_FILES['image']['tmp_name'];
	$des = "../../models/bloggerupload/".$_FILES['image']['name'];

	

	if($name != null && $username != null && $password != null &&  $email != null && $gender != null && $phone != null)
	{

		move_uploaded_file($src, $des);
		$status = create ($name,$username,$password,$email,$gender,$phone,$filename);
		

		if($status)
		{
			header('location: ../../views/BloogerViews/CreateAccount.php?msg=success');
		}
		else
		{
			header('location: ../../views/BloogerViews/CreateAccount.php?msg=failed');
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