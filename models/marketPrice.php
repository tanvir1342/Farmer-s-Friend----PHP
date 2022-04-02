<?php



function priceinsertion($retailer_name,$retailer_username,$product_name,$price)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into market_price  (retailer_name, retailer_username, product_name, price) values ('$retailer_name', '$retailer_username', '$product_name', '$price')";
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

//update price
function updateprice($retailer_name,$retailer_username,$product_name,$price,$oldprn)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "update market_price set retailer_name = '$retailer_name', retailer_username = '$retailer_username', product_name = '$product_name',price = '$price' where retailer_username = '$retailer_username' and product_name ='$oldprn'";
	if(mysqli_query($con ,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

//get one user price
function getIN($username)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select * from market_price where retailer_username = '$username'";
	$result = mysqli_query($con ,$sql);
	if ($row = mysqli_fetch_all($result)) {
		return $row;
	}
}

//get all price
function getall()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select * from market_price";
	$result = mysqli_query($con ,$sql);
	if ($row = mysqli_fetch_all($result)) {
		return $row;
	}
}
?>