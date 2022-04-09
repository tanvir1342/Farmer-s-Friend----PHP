<?php

// Blogger post pending
function pending($username,$blogger_name,$post)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into post_pending_side(username,blogger_name,post) values ('$username','$blogger_name','$post')";
	
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