<?php

function create($username,$blogger_username,$post,$status)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into post_pending_side(post) values ('$post')";
	
	if(mysqli_query($con,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}







?>