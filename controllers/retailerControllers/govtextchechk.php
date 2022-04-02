<?php 
session_start();
require('../../models/govtexmodel.php');

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
    $payment_method = $_REQUEST['payment_method'];
	$phoneNumber = $_REQUEST['phone'];
	$amount = $_REQUEST['amount'];
	$cityORdistrict = $_REQUEST['cityORdistrict'];
	$pinORpass = $_REQUEST['pinORpass'];


	if($username != null && $payment_method != null && $phoneNumber != null && $amount != null && $cityORdistrict != null && $pinORpass != null)

		{

		$status =gov_Tax($username,$payment_method,$phoneNumber,$amount,$cityORdistrict,$pinORpass);
		if($status)
		{
			header('location: ../../views/retailerViews/govTax.php?msg=success');
		}
		else
		{
			header('location: ../../views/retailerViews/govTax.php?msg=unsuccessful');
		}
	}
	else{
		echo "null submission ....";
	}
}

	?>
