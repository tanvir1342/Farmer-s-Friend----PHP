<?php


function login($username,$password)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from vet_info where username = '{$username}' and password = '{$password}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


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
    $sql = "update vet_info set name='$name', username='$username', password='$password', email='$email', gender='$gender', phone='$phone' where username='$usernameold'";

    if(mysqli_query($con ,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}


function getoneuser($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from vet_info where username = '{$username}'";
	$result = mysqli_query($con ,$sql);
	if($row = mysqli_fetch_assoc($result)){


		return $row;
	}
	
}

?>