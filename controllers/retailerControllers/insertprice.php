<?php
session_start();
require('../../models/marketPrice.php');
if (isset($_POST['name1'])&&isset($_POST['username1'])&&isset($_POST['product_name1'])&&isset($_POST['price1'])) {
	
	$retailer_name = $_POST['name1'];
	$retailer_username = $_POST['username1'];
	$product_name = $_POST['product_name1'];
	$price = $_POST['price1'];
	 
	 $status =  priceinsertion($retailer_name,$retailer_username,$product_name,$price);
		   if ($status) {
			echo "success";
		}
		else
		{
			echo "failed";
		}
		}

		
?>