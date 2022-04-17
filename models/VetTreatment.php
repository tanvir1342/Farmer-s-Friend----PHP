<?php

// Veterinarian Quick Treatment
function quick_treatment($farmer_username,$vet_username,$animal_type,$description,$treatment)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into quick_treatment(farmer_username,vet_username,animal_type,description,treatment) values ('$farmer_username','$vet_username','$animal_type','$description','$treatment')";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
function delete($farmer_username,$description)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "delete from vet_support where  username = '$farmer_username' and description = '$description'";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
function getuser()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from quick_treatment";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_all($result);
		return $row;
	}
	
}

?>