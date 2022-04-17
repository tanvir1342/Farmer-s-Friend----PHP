<?php 
session_start();
require('../../models/BloggerResearchPaperPending.php');

if(isset($_POST['blogger_username1']) && isset ($_POST['domain_name1']) && isset ($_POST['thesis_topic1']) && isset ($_POST['research_paper1']))
{
	
	$blogger_username = $_POST['blogger_username1'];
	$domain_name = $_POST['domain_name1'];
	$thesis_topic = $_POST['thesis_topic1'];
	$research_paper = $_POST['research_paper1'];


	//if($blogger_username != null && $domain_name !=null && $thesis_topic != null && $research_paper != null)
	{

		$status = paper ($blogger_username,$domain_name,$thesis_topic,$research_paper);
		if($status)
		{
			echo "success";
		}
		else
		{
			echo "failed";
		}


	}
}

?>