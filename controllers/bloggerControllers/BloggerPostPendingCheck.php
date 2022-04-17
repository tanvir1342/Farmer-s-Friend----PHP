<?php 
session_start();
require('../../models/BloggerPostPending.php');

if(isset($_POST['username1']) && isset ($_POST['blogger_name1']) && isset ($_POST['post1']))
{


	
	$username = $_POST['username1'];
	$blogger_name = $_POST['blogger_name1'];
	$post = $_POST['post1'];
	


	//if($username != null && $blogger_name !=null && $post != null )
	{

		$status = pending ($username,$blogger_name,$post);
		if($status)
		{
			echo "sucsess";
		}
		else
		{
			echo "failed";
		}


	}
}

?>