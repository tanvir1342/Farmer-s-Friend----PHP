<?php 
session_start();
require('../../models/farmer_waterPayment.php');

if(isset($_POST['data']))
	// && isset ($_POST['payment_method1']) && isset ($_POST['Phone1']) && isset ($_POST['Amount1']) && isset ($_POST['city_district1']) && isset ($_POST['pin_pass1']) && isset ($_POST['code1']))
{
	$data = $_POST['data'];
	$json = json_decode($data);

	$username= $json->username;
	$payment_method= $json->payment_method;
	$Phone= $json->Phone;
	$Amount= $json->Amount;
	$city_district= $json->city_district;
	$pin_pass= $json->pin_pass;
	$code= $json->code;

	// $username = $_POST['username1'];
	// $payment_method = $_POST['payment_method1'];
	// $Phone = $_POST['Phone1'];
	// $Amount = $_POST['Amount1'];
	// $city_district = $_POST['city_district1'];
	// $pin_pass = $_POST['pin_pass1'];
	// $code = $_POST['code1'];

	{
		$status = waterpayment ($username,$payment_method,$Phone,$Amount,$city_district,$pin_pass,$code);
		if($status)
		{
            echo "Payment Successful";
        }
        else
        {
            echo "Payment Failed";
        }


	}
}

?>