<?php

// login
function login($username,$password)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from farmer_login where username = '{$username}' and password = '{$password}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return true;
	}
	else
	{
		return false;
	}
}

// create
function create($username,$password,$name,$email,$phoneNumber,$farmer_type,$gen,$nid,$filename)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into farmer_login (username,password,name,email,phone_number,farmer_type,gender,nid,photo) values ('$username','$password','$name','$email','$phoneNumber',
	'$farmer_type','$gen','$nid','$filename')";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

//edit account
function edit($username,$password,$name,$email,$phoneNumber,$farmer_type,$gen,$nid,$usernameold)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "update farmer_login set username='$username', password='$password', name='$name' , email='$email', phone_number='$phoneNumber', farmer_type='$farmer_type', gender='$gen', nid='$nid' where username='$usernameold'";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
//username check
function checkusername($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from farmer_login where username = '{$username}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return true;
	}
	else
	{
		false;
	}
	
}
//email check
function checkemail($email)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from farmer_login where email = '{$email}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return true;
	}
	else
	{
		false;
	}
	
}
function getuser()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from farmer_login";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_all($result);
		return $row;
	}
	
}
function getoneuser($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from farmer_login where username = '$username'";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	
}


?>