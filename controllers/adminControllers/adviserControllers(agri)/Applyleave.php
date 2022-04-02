<?php

  require('../../../models/adviser(agri)_info.php');

if (isset($_REQUEST['submit'])) {
	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
	$reason_for_leave = $_REQUEST['reasoneForLeave'];
	$leaving_date = $_REQUEST['Form'];
	$joining_date = $_REQUEST['to'];
	$total_days = $_REQUEST['totalDays'];

	if ($username!=null && $name!=null && $reason_for_leave!=null && $leaving_date!=null && $joining_date!=null && $total_days !=null) {
		

		$status = applyforleave($username,$name,$reason_for_leave,$leaving_date,$joining_date,$total_days);
		if ($status) {
			header('location: ../../../views/AdminViews/Advisier(Agriculture)/ApplyForLeave.php?msg=applied');
		}
	}
	else
	{
		echo "null submission";
	}
}
?>