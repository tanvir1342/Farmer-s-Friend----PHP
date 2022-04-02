<?php
session_start();
require('../../models/transport.php');
if (isset($_REQUEST['submit'])) {
	$retailer_name = $_REQUEST['retailer_name'];
	$retailer_username = $_REQUEST['retailer_username'];
	$froms = $_REQUEST['froms'];
	$too = $_REQUEST['too'];
	$product_name = $_REQUEST['product_name'];
	$weight = $_REQUEST['weight'];
	$date = $_REQUEST['date'];
	if ($retailer_name!=null && $retailer_username!=null && $froms!=null && $too!=null && $product_name!=null && $weight!=null && $date !=null) {
		

		$status = transport($retailer_name,$retailer_username,$froms,$too,$product_name,$weight,$date);
		if ($status) {
			header('location: ../../views/retailerViews/retailerTransportHistory.php?msg=done');
		}
		else
		{
			header('location: ../../views/retailerViews/retailerTransportHistory.php?msg=failed');
		}
	}
}


?>