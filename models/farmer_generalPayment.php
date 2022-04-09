<?php

// generalpayment
function generalpayment ($username,$payment_method,$Phone,$Amount,$city_district,$pin_pass,$code)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into general_payment (username,payment_method,Phone,Amount,city_district,pin_pass,code) values ('$username','$payment_method','$Phone','$Amount','$city_district','$pin_pass','$code')";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

?>