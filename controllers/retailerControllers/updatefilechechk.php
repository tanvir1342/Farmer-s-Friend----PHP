<?php
require('../../models/marketPrice.php');
if (isset($_REQUEST['submit'])) {
	
	$retailer_name = $_REQUEST['retailer_name'];
	$retailer_username = $_REQUEST['retailer_username'];
	$product_name = $_REQUEST['product_name'];
	$price = $_REQUEST['price'];
	$oldprn = $_GET['prn'];

	{
		if ($product_name!=null && $price != null) {
		    $status =  updateprice($retailer_name,$retailer_username,$product_name,$price,$oldprn);
		    if ($status) {
		    	header('location: ../../views/retailerViews/retailerUpdatePrice.php?msg=done');
		    }
		}
	}


}


?>