<?php 
session_start();
require('../../models/farmer_post_problem_agri.php');

if(isset($_POST['username1']) && isset ($_POST['farmer_type1']) && isset ($_POST['problem1']))

{


	$username = $_POST['username1'];
	$farmer_type = $_POST['farmer_type1'];
	$problem = $_POST['problem1'];


	{

		$status = problem_agri($username,$farmer_type,$problem);
		if($status)
		{
            echo "Post Successful";
        }
        else
        {
            echo "Post Failed";
        }


	}
}

?>