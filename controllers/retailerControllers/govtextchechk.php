<?php 
session_start();
require('../../models/govtexmodel.php');

if(isset($_POST['username1']) &&isset($_POST['payment_method1']) &&isset($_POST['phone1'])&&isset($_POST['amount1'])&&isset($_POST['cityORdistrict1'])&&isset($_POST['pinORpass1'])){

	$username = $_POST['username1'];
    $payment_method = $_POST['payment_method1'];
	$phoneNumber = $_POST['phone1'];
	$amount = $_POST['amount1'];
	$cityORdistrict = $_POST['cityORdistrict1'];
	$pinORpass = $_POST['pinORpass1'];




		$status =gov_Tax($username,$payment_method,$phoneNumber,$amount,$cityORdistrict,$pinORpass);
		
		if ($status) {
			echo "success";
		}
		else
		{
			echo "failed";
		}
	}
	


	?>
