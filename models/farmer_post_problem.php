<?php

// post problem
function problem ($username,$farmer_type,$problem)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into post_problem (username,farmer_type,problem) values ('$username','$farmer_type','$problem')";
	
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