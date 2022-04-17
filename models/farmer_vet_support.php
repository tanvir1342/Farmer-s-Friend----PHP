<?php

// post problem
function support ($username,$farmer_name,$animal_type,$description)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into vet_support (username,farmer_name,animal_type,description) values ('$username','$farmer_name','$animal_type','$description')";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
function getallpost()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from vet_support";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_all($result);
		return $row;
	}
}

function treatment($farmer_username,$vet_username,$animal_type,$treatment)
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
function getoneuser($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from vet_support where username = '$username'";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	
}

?>