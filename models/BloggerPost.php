<?php
function getuser()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from blogger_post";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_all($result);
		return $row;
	}
	
}

?>