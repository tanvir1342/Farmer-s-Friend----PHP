<?php 
session_start();
require('../../models/farmer_generalPayment.php');

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
	$payment_method = $_REQUEST['payment_method'];
	$Phone = $_REQUEST['Phone'];
	$Amount = $_REQUEST['Amount'];
	$city_district = $_REQUEST['city_district'];
	$pin_pass = $_REQUEST['pin_pass'];
	$code = $_REQUEST['code'];


	if($username != null && $payment_method !=null && $Phone != null && $Amount != null && $city_district != null && $pin_pass != null && $code != null)
	{

		$status = generalpayment ($username,$payment_method,$Phone,$Amount,$city_district,$pin_pass,$code);
		if($status)
		{
			header('location: ../../views/farmerViews/farmerGeneralPayments.php?msg=success');
		}
		else
		{
			header('location: ../../views/farmerViews/farmerGeneralPayments.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>