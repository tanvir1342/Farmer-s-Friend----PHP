<?php
require('../../../models/pendingdeal.php');

if (isset($_POST['farmerusername']) && isset($_POST['retailerusername']) ) {
	$farmerusername = $_POST['farmerusername'];
	$retailerusername = $_POST['retailerusername'];
	$discription = $_POST['discription'];
	$amount = $_POST['amount'];
	$qntty = $_POST['qntty'];
	$date = $_POST['date'];
	$pn = $_POST['pn'];



	if($status = approvedeal($farmerusername,$retailerusername,$discription,$amount,$qntty,$date,$pn))
	{
		echo "inserted";
	}
}


?>