<?php

function approvebanksupport($farmer_name,$farmer_username,$land_Property_status,$yearly_income,$Amount_of_loan,$reason){


    $con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into bank_support_approve (username,farmer_name,land_property,yearly_income,Amount_of_loan,reason_for_loan) values ('$farmer_username',
	'$farmer_name','$land_Property_status','$yearly_income','$Amount_of_loan','$reason')";
	
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