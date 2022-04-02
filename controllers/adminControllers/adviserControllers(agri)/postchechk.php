<?php
	session_start();
	require('../../../models/guidline_agri.php');
    $username =$_SESSION['adviser_agri_username'];
    if (isset($_REQUEST['submit'])) {
      
     $post = $_REQUEST['guide'];
     if($post!=null)
     {
     	$status = post_guidline($username,$post);
     	if ($status) {
     		header('location: ../../../views/AdminViews/Advisier(Agriculture)/GuideFarmers.php?msg=done');
     	}
     	else
     	{
     		header('location: ../../../views/AdminViews/Advisier(Agriculture)/GuideFarmers.php?msg=failed');
     	}
     }

    }



?>