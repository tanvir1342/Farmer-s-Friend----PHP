<?php 
session_start();
require('../../../models/VetTreatment.php');
$vet_username = $_SESSION['vet_username'];

if(isset($_REQUEST['submit'])){
	
	$farmer_username = $_REQUEST['username'];
	$animal_type = $_REQUEST['type'];
	$description = $_REQUEST['description'];
	$treatment = $_REQUEST['solve'];


	if($farmer_username != null && $description !=null && $animal_type != null && $treatment != null)
	{

		$status = quick_treatment($farmer_username,$vet_username,$animal_type,$description,$treatment);
		if($status)
		{
			$del = delete($farmer_username,$description);
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