<?php

// post problem
function problem_eco($username,$farmer_type,$problem)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into post_problem_eco (username,farmer_type,problem) values ('$username','$farmer_type','$problem')";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
//GET ALL FARMER POST
function getallpost_eco()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from post_problem_eco";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_all($result);
		return $row;
	}
}
//INSERT ADVISER SOLVE
function solveproblem_eco($adviser_username,$farmer_username,$solve)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into solve_problem_eco (adviser_username,farmer_username,solve) values ('$adviser_username','$farmer_username','$solve')";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
//GET SOLUTION FARMER SIDE
function getsolve_farmer($username){
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from solve_problem_eco where farmer_username = '$username'";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_all($result);
		return $row;
	}

}
//GET HISTORY ADVISER SIDE
function getsolve_history($username){
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from solve_problem_eco where adviser_username = '$username'";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_all($result);
		return $row;
	}

}
//DELET POST WHEN THE SOLVE WILL GIVE
function deletpost($farmer_username,$problem){
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "delete from post_problem_eco where  problem = '$problem' and username = '$farmer_username'";
	
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