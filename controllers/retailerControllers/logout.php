<?php 
	
	session_start();
	unset($_SESSION['status']);
	setcookie('status', 'true', time()-30000, '/');
	header('location: ../../views/retailerViews/Login.php');

?>