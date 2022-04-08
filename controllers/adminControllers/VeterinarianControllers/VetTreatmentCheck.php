<?php 
session_start();
require('../../../models/VetTreatment.php');

if(isset($_REQUEST['submit'])){
	
	$farmer_username = $_REQUEST['farmer_username'];
	$vet_username = $_REQUEST['vet_username'];
	$animal_type = $_REQUEST['animal_type'];
	$treatment = $_REQUEST['treatment'];


	if($farmer_username != null && $vet_username !=null && $animal_type != null && $treatment != null)
	{

		$status = vet_schedule($farmer_username,$vet_username,$animal_type,$treatment);
		if($status)
		{
			header('location: ../../../views/AdminViews/Veterinarian/treatment.php?msg=success');
		}
		else
		{
			header('location: ../../../views/AdminViews/Veterinarian/treatment.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>