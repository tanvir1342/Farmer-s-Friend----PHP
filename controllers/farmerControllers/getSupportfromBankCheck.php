<?php 
session_start();
require('../../models/bank_support_database.php');
if(isset($_POST['username1']) && isset($_POST['name1']) && isset($_POST['land_property1']) && isset($_POST['income1']) && isset($_POST['amount1']) && isset($_POST['reason_for_loan1']))
{
	
	$username = $_POST['username1'];
	$farmer_name = $_POST['name1'];
	$land_property = $_POST['land_property1'];
	$yearly_income  = $_POST['income1'];
	$Amount_of_loan  = $_POST['amount1'];
	$reason_for_loan  = $_POST['reason_for_loan1'];

	{

		$status = bankSupport ($username,$farmer_name,$land_property,$yearly_income,$Amount_of_loan,$reason_for_loan);
		if($status)
		{
            echo "You Request Is Submitted";
        }
        else
        {
            echo "Something Went Wrong!";
        }

	}
}

?>