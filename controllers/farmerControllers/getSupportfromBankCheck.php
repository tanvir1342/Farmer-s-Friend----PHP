<?php 
session_start();
require('../../models/bank_support_database.php');

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
	$farmer_name = $_REQUEST['name'];
	$land_property = $_REQUEST['land_property'];
	$yearly_income  = $_REQUEST['income'];
	$Amount_of_loan  = $_REQUEST['amount'];
	$reason_for_loan  = $_REQUEST['reason_for_loan'];

	if($username != null && $farmer_name !=null && $land_property != null && $yearly_income != null && $Amount_of_loan != null && $reason_for_loan != null )
	{

		$status = bankSupport ($username,$farmer_name,$land_property,$yearly_income,$Amount_of_loan,$reason_for_loan);
		if($status)
		{
			header('location: ../../views/farmerViews/farmerBankingGuideline.php?msg=success');
		}
		else
		{
			header('location: ../../views/farmerBankingGuideline.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>