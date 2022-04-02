<?php
session_start();
require('../../../models/adviser(agri)_info.php');
 if(isset($_REQUEST['submit'])){
	
	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
	$email = $_REQUEST['email'];
	$gender = $_REQUEST['gender'];
	$age = $_REQUEST['age'];
	$salary = $_REQUEST['salary'];
	$join = $_REQUEST['join'];

	if($username != null && $name != null && $email != null && $gender != null && $age !=null)
	{
		$status = creat($username,$name,$password,$email,$gender,$age,$salary,$join);
		if ($status) {
			 header('location: ../../../views/AdminViews/Executive/createAdviser(Agri).php?msg=done');
		}
		else
		{
			header('location: ../../../views/AdminViews/Executive/createAdviser(Agri).php?msg=failed');

		}
	}
	else
	{
		echo "null submission";
	}
}

?>