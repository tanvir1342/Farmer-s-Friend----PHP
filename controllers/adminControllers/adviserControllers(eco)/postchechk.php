<?php
	session_start();
	require('../../../models/guidline_eco.php');
    $username =$_SESSION['adviser_eco_username'];
    if (isset($_REQUEST['submit'])) {
      
     $post = $_REQUEST['guide'];
     if($post!=null)
     {
     	$status = post_guidline($username,$post);
     	if ($status) {
     		header('location: ../../../views/AdminViews/Adviser(Econmoic)/CostingGuidline.php?msg=done');
     	}
     	else
     	{
     		header('location: ../../../views/AdminViews/Adviser(Econmoic)/CostingGuidline.php?msg=failed');
     	}
     }

    }



?>