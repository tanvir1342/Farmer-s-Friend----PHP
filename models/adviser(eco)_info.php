<?php

//login

function login($username,$password)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from adviser_eco_info where username = '{$username}' and password = '{$password}'";
	$result = mysqli_query($con,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return true;
	}
	else
	{
		return false;
	}
}

//username chehck
function checkusername($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from adviser_eco_info where username = '{$username}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return true;
	}
	else
	{
		false;
	}
	
}
//email chehck
function checkemail($email)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from adviser_eco_info where email = '{$email}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return true;
	}
	else
	{
		false;
	}
	
}
//get adviser all info
function getuserinfo($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from adviser_eco_info where username = '{$username}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return $row;
	}
	
}
//eco apply leave

function applyforleave($username,$name,$reason_for_leave,$leaving_date,$joining_date,$total_days)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into applyleave_eco (username,name,reason_for_leave,leaving_date,joining_date,total_days) values ('$username','$name','$reason_for_leave','$leaving_date','$joining_date','$total_days')";
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
//edit Profile

function editprofile($username,$name,$password,$email,$gender,$age,$usernameold)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "update adviser_eco_info set username='$username', password='$password', name='$name' , email='$email', gender='$gender',
	        age='$age'where username='$usernameold'";
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
//create Account
function  creat($username,$name,$password,$email,$gender,$age,$salary,$join,$des){
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into adviser_eco_info (Name,username,password,email,gender,age,salary,joining_date,photo) values ('$name','$username','$password','$email','$gender','$age','$salary','$join','$des')";
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}

}
//get all userinfo
function getuser()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from adviser_eco_info";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_all($result);
		return $row;
	}
	
}




?>