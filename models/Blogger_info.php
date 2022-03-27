<?php

function login($username,$password)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select * from blogger_info where username = '{$username}' and password = '{$password}'";
	$result = mysqli_query($con,$sql);
	if($row = mysqli_fetch_assoc($result))
	{
		return true;
	}
	else
	{
		return false;
	}


}
function create($name,$username,$password,$email,$gender,$phone)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into blogger_info(name,username,password,email,gender,phone) values ('$name','$username','$password','$email','$gender','$phone')";
	
	if(mysqli_query($con,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
function edit ($name,$username,$password,$email,$gender,$phone,$usernameold)
{
    $con = mysqli_connect('localhost','root','','webtech');
    $sql = "update blogger_info set name='$name', username='$username', password='$password', email='$email', gender='$gender', phone='$phone' where username='$usernameold'";

    if(mysqli_query($con ,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}
function getuser()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from blogger_info";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_all($result);
		return $row;
	}
	
}


?>