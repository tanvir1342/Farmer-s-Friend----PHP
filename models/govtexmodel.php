<?php
function gov_Tax($username,$payment_method,$phoneNumber,$amount,$cityORdistrict,$pinORpass)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into government_tax  (username, payment_method, phoneNumber, amount, cityORdistrict, pinORpass) values ('$username','$payment_method','$phoneNumber','$amount','$cityORdistrict','$pinORpass')";
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