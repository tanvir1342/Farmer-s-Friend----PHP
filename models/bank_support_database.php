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



// get support from bank
function bankSupport ($username,$farmer_name,$land_property,$yearly_income,$Amount_of_loan,$reason_for_loan)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into bank_support_pending (username,farmer_name,land_property,yearly_income,Amount_of_loan,reason_for_loan) values ('$username',
	'$farmer_name','$land_property','$yearly_income','$Amount_of_loan','$reason_for_loan')";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
//delete pending bank support
function deletepending($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "delete from bank_support_pending where username = '$username'";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function gettlist()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from bank_support_pending";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_all($result);
		return $row;
	}
}



?>