<?php


function login($username,$password)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from executive_info where username = '{$username}' and password = '{$password}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return true;
	}
	else
	{
		return false;
	}
}

function getuserinfo($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from executive_info where username = '{$username}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return $row;
	}
	
}

?>