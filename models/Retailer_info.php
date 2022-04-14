<?php
//login

function login($username,$password)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from retailer_info where username = '{$username}' and password = '{$password}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return true;
	}
	else
	{
		return false;
	}
}
//create account retailer side

function createpending($name,$username ,$password,$nidNumber, $email, $phoneNumber, $gen, $licNumber,$filename)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into retailer_info_pending  (name, username, password, nidNumber, email, phone_Number, Gender, trade_License_Number,photo, trade_License_Copy) values ('$name','$username' ,'$password','$nidNumber', '$email', '$phoneNumber', '$gen', '$licNumber','$filename')";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
//create account by admin
function create($name,$username ,$password,$nidNumber, $email, $phoneNumber, $gen, $licNumber)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into retailer_info  (name, username, password, nidNumber, email, phone_Number, Gender, trade_License_Number) values ('$name','$username' ,'$password','$nidNumber', '$email', '$phoneNumber', '$gen', '$licNumber')";
	
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
function edit($name,$username ,$password,$nidNumber, $email, $phoneNumber, $gen, $licNumber, $usernameold)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "update retailer_info set name = '$name', username ='$username', password = '$password', nidNumber='$nidNumber', email ='$email', phone_Number ='$phoneNumber', Gender ='$gen', trade_License_Number = '$licNumber'  where username='$usernameold'";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
//get all  user
function getuser()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from retailer_info";
	
	$result = mysqli_query($con ,$sql);
	if ($row = mysqli_fetch_all($result)) {
		return $row;
	}
}
//get indivisual  user
function getoneuser($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from retailer_info where username = '$username'";
	
	$result = mysqli_query($con ,$sql);
	if ($row = mysqli_fetch_assoc($result)) {
		return $row;
	}
}
//get all pending user
function getpendinguser()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from retailer_info_pending";
	
	$result = mysqli_query($con ,$sql);
	if ($row = mysqli_fetch_all($result)) {
		return $row;
	}
}
//delete pending user
function delete_pending($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "delete from retailer_info_pending where username='$username'";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

//email chehck
function checkemail($email)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from retailer_info where email = '{$email}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return true;
	}
	else
	{
		false;
	}
	
}

//username check
function checkusername($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from retailer_info where username = '{$username}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return true;
	}
	else
	{
		false;
	}
	
}

?>

