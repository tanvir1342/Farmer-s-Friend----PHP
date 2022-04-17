<?php 
session_start();
require('../../models/farmer_dealWithRetailers.php');


if(isset($_REQUEST['submit']))
{
	
	$farmerusername = $_REQUEST['farmerusername'];
    $retailerusername = $_REQUEST['retailerusername'];
	$pn = $_REQUEST['pn'];
	$description = $_REQUEST['description'];
	$qntty = $_REQUEST['qntty'];
	$amount = $_REQUEST['amount'];
	$date = $_REQUEST['date'];
	


	if($farmerusername != null && $retailerusername != null && $pn != null && $description != null && $qntty != null && $amount !=null && $date != null )
	{

		$status = dealretailer ($farmerusername,$retailerusername,$pn,$description,$qntty,$amount,$date);
		if($status)
		{
			header('location: ../../views/farmerViews/farmerHome.php?msg=RequestSended');
		}
		else
		{
			header('location: ../../views/farmerViews/farmerHome.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>