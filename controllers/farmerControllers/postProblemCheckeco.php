<?php 
session_start();
require('../../models/farmer_post_problem_eco.php');

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
	$farmer_type = $_REQUEST['farmer_type'];
	$problem = $_REQUEST['problem'];


	if($username != null && $farmer_type !=null && $problem != null)
	{

		$status = problem_eco($username,$farmer_type,$problem);
		if($status)
		{
			header('location: ../../views/farmerViews/postproblemeco.php?msg=success');
		}
		else
		{
			header('location: ../../views/farmerViews/postproblemeco.php?msg=failed');
		}


	}else{
		echo "null submission ....";
	}
}

?>