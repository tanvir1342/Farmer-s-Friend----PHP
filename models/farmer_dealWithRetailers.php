<?php

// insert to deal with retailers
function dealretailer($farmerusername,$retailerusername,$pn,$description,$qntty,$amount,$date)
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into deal_retailer_submit (farmerusername,retailerusername,pn,description,qntty,amount,date) values ('$farmerusername','$retailerusername','$pn','$description','$qntty','$amount','$date')";
	
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