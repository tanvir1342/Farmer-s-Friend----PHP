<?php
//single insert
function transport($retailer_name,$retailer_username,$froms,$too,$product_name,$weight,$date)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into transport (retailer_name,retailer_username,froms,too,product_name,weight,date) values ('$retailer_name','$retailer_username','$froms','$too','$product_name','$weight','$date')";
	
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function getallhistory()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from transport";
	$result = mysqli_query($con ,$sql);

	if($row = mysqli_fetch_all($result))
	{
		return row;
	}
}
//history for one user
function getonehistory($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from transport where retailer_username = '$username'";
	$result = mysqli_query($con ,$sql);

	if($row = mysqli_fetch_all($result))
	{
		return $row;
	}
}