<?php
require("../../../models/bank_support_database.php");
if (isset($_REQUEST['submit'])) {
	$farmer_name = $_REQUEST['name'];
	$farmer_username = $_REQUEST['username'];
	$land_Property_status = $_REQUEST['land_Property_status'];
	$yearly_income = $_REQUEST['yearly_income'];
	$Amount_of_loan = $_REQUEST['Amount_of_loan'];
	$reason = $_REQUEST['reason'];



	if ($farmer_name!=null && $farmer_username!=null && $land_Property_status!=null && $yearly_income!=null && $Amount_of_loan!=null && $reason != null ) {
		$status = approvebanksupport($farmer_name,$farmer_username,$land_Property_status,$yearly_income,$Amount_of_loan,$reason);
		if ($status) {
			header('location: ../../../views/AdminViews/Adviser(Econmoic)/bankingSupport.php?msg=done');
		}
		
	}
}



?>