<?php 
session_start();
require('../../models/farmer_post_problem.php');

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
	$farmer_type = $_REQUEST['problemType'];
	$problem = $_REQUEST['problem'];


	if($username != null && $farmer_type !=null && $problem != null)
	{

		$status = problem ($username,$farmer_type,$problem);
		if($status)
		{
			header('location: ../../views/farmerViews/farmerPostProblems.php?msg=success');
		}
		else
		{
			header('location: ../../views/farmerViews/farmerPostProblems.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>