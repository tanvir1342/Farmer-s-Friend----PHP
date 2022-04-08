<?php 
session_start();
require('../../models/BloggerPostPending.php');

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
	$blogger_name = $_REQUEST['blogger_name'];
	$post = $_REQUEST['post'];
	$status = $_REQUEST['status'];


	if($username != null && $blogger_name !=null && $post != null && $status != null)
	{

		$status = pending ($username,$blogger_name,$post,$status);
		if($status)
		{
			header('location: ../../views/bloogerViews/WritePost.php?msg=success');
		}
		else
		{
			header('location: ../../views/bloogerViews/WritePost.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>