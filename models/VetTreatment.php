<?php

// Veterinarian Quick Treatment
function quick_treatment($farmer_username,$vet_username,$animal_type,$treatment)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into quick_treatment(farmer_username,vet_username,animal_type,treatment) values ('$farmer_username','$vet_username','$animal_type','$treatment')";
	
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