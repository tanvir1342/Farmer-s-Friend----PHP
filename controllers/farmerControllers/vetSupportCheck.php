<?php 
session_start();
require('../../models/farmer_vet_support.php');

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['name'];
	$farmer_name = $_REQUEST ['fname'];
	$animal_type = $_REQUEST['animaltype'];
	$description = $_REQUEST['description'];


	if($username != null && $farmer_name !=null && $animal_type != null && $description != null)
	{

		$status = support ($username,$farmer_name,$animal_type,$description);
		if($status)
		{
			header('location: ../../views/farmerViews/veterinarianSupport.php?msg=success');
		}
		else
		{
			header('location: ../../views/farmerViews/veterinarianSupport.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>