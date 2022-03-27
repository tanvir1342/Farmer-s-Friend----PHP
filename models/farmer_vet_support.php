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

?>