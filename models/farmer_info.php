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
function create($username,$password,$name,$email,$phoneNumber,$farmer_type,$gen,$nid)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into farmer_login (username,password,name,email,phone_number,farmer_type,gender,nid) values ('$username','$password','$name','$email','$phoneNumber',
	'$farmer_type','$gen','$nid')";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}


?>