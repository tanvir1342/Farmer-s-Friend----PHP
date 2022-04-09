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


function edit ($Name,$username,$password,$name,$email,$gender,$age,$salary,$joining_date,$usernameold)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "update executive_info set Name='$Name', username='$username',password='$password',name='$name',email='$email',gender='$gender',age='$age',salary='$salary',joining_date='$joining_date' where username='$usernameold'";
	
	if(mysqli_query($con ,$sql))
	{
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