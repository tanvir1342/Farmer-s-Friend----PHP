<?php

// Veterinarian Give Schedule
function vet_schedule($farmer_username,$vet_username,$animal_type,$treatment)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into vet_schedule(farmer_username,vet_username,animal_type,schedule) values ('$farmer_username','$vet_username','$animal_type','$schedule')";
	
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