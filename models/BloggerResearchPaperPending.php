<?php

// Blogger research paper pending
function paper($blogger_username,$domain_name,$thesis_topic,$research_paper)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into research_paper_pending_part(blogger_username,domain_name,thesis_topic,research_paper) values ('$blogger_username','$domain_name','$thesis_topic','$research_paper')";
	
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