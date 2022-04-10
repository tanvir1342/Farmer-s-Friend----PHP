<?php
session_start();
require('../../../models/adviser(eco)_info.php');

      
 if(isset($_REQUEST['submit'])){
	
	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
	$email = $_REQUEST['email'];
	$gender = $_REQUEST['gender'];
	$age = $_REQUEST['age'];
	$salary = $_REQUEST['salary'];
	$join = $_REQUEST['join'];
	$src = $_FILES['image']['tmp_name'];
	$des = "../../../views/AdminViews/Adviser(Econmoic)/upload/".$_FILES['image']['name'];
	

	if($username != null && $name != null && $email != null && $gender != null && $age !=null)
	{
		
		move_uploaded_file($src, $des);
		$status = creat($username,$name,$password,$email,$gender,$age,$salary,$join,$des);
		if ($status) {
			 header('location: ../../../views/AdminViews/Executive/createAdviser(eco).php?msg=done');
		}
		else
		{
			header('location: ../../../views/AdminViews/Executive/createAdviser(eco).php?msg=failed');

		}
	}
	else
	{
		echo "null submission";
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



/*
      	
		    $username = $_POST['username1'];
		    $name = $_POST['name1'];
		    $password = $_POST['password1'];
			$email = $_POST['email1'];
			$gender = $_POST['gender1'];
			$age = $_POST['age1'];
			$salary = $_POST['salary1'];
			$join = $_POST['join1'];
			$status = creat($username,$name,$password,$email,$gender,$age,$salary,$join,$location);
			if ($status){
			 echo "success";
			}
		

	
	
		
		*/
			?>
