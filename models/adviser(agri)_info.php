<?php

//login

function login($username,$password)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from adviser_agri_info where username = '{$username}' and password = '{$password}'";
	$result = mysqli_query($con,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return true;
	}
	else
	{
		return false;
	}
}
//get adviser all info
function getuserinfo($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from adviser_agri_info where username = '{$username}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return $row;
	}
	
}
//eco apply leave

function applyforleave($username,$name,$reason_for_leave,$leaving_date,$joining_date,$total_days)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into applyleave_agri (username,name,reason_for_leave,leaving_date,joining_date,total_days) values ('$username','$name','$reason_for_leave','$leaving_date','$joining_date','$total_days')";
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
	$sql = "update adviser_agri_info set username='$username', password='$password', name='$name' , email='$email', gender='$gender',
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
function  creat($username,$name,$password,$email,$gender,$age,$salary,$join){
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into adviser_agri_info (Name,username,password,email,gender,age,salary,joining_date) values ('$name','$username','$password','$email','$gender','$age','$salary','$join')";
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
	$sql = "select *from adviser_agri_info";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_all($result);
		return $row;
	}
	
}




?>