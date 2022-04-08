<?php 
session_start();
require('../../../models/VetSchedule.php');

if(isset($_REQUEST['submit'])){
	
	$farmer_username = $_REQUEST['farmer_username'];
	$vet_username = $_REQUEST['vet_username'];
	$animal_type = $_REQUEST['animal_type'];
	$schedule = $_REQUEST['schedule'];


	if($farmer_username != null && $vet_username !=null && $animal_type != null && $schedule != null)
	{

		$status = vet_schedule($farmer_username,$vet_username,$animal_type,$schedule);
		if($status)
		{
			header('location: ../../../views/AdminViews/Veterinarian/schedule.php?msg=success');
		}
		else
		{
			header('location: ../../../views/AdminViews/Veterinarian/schedule.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>