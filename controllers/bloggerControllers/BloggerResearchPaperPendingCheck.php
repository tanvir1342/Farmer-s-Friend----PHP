<?php 
session_start();
require('../../models/BloggerResearchPaperPending.php');

if(isset($_REQUEST['submit'])){
	
	$blogger_username = $_REQUEST['blogger_username'];
	$domain_name = $_REQUEST['domain_name'];
	$thesis_topic = $_REQUEST['thesis_topic'];
	$research_paper = $_REQUEST['research_paper'];


	if($blogger_username != null && $domain_name !=null && $thesis_topic != null && $research_paper != null)
	{

		$status = paper ($blogger_username,$domain_name,$thesis_topic,$research_paper);
		if($status)
		{
			header('location: ../../views/bloogerViews/PublishResearchPaper.php?msg=success');
		}
		else
		{
			header('location: ../../views/bloogerViews/PublishResearchPaper.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>