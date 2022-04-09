<?php 
session_start();
require('../../models/BloggerPostPending.php');

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
	$blogger_name = $_REQUEST['blogger_name'];
	$post = $_REQUEST['post'];
	


	if($username != null && $blogger_name !=null && $post != null )
	{

		$status = pending ($username,$blogger_name,$post);
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