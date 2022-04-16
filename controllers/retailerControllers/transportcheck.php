<?php
session_start();
require('../../models/transport.php');
if (isset($_POST['username1'])&& isset($_POST['name1'])&&isset($_POST['from1'])&&isset($_POST['to1'])&&isset($_POST['product_name1'])&&isset($_POST['weight1'])&&isset($_POST['date1'])  ) {
	$retailer_name = $_POST['name1'];
	$retailer_username = $_POST['username1'];
	$froms = $_POST['from1'];
	$too = $_POST['to1'];
	$product_name = $_POST['product_name1'];
	$weight = $_POST['weight1'];
	$date = $_POST['date1'];

		

		$status = transport($retailer_name,$retailer_username,$froms,$too,$product_name,$weight,$date);
		if ($status) {
			echo "success";
		}
		else
		{
			echo "failed";
		}
	}
}


?>

