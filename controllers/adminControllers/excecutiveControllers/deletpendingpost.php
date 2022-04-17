
<?php
require('../../../models/pendingdeal.php');

if (isset($_POST['farmerusername1']) && isset($_POST['retailerusername1']) ) {
	$farmerusername = $_POST['farmerusername1'];
	$retailerusername = $_POST['retailerusername1'];
	if($status = deletpendingdeal($farmerusername,$retailerusername))
	{
		echo "ok";
	}
}


?>