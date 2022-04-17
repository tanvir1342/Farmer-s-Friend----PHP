<?php
require('../../../models/pendingdeal.php');
if ($status = getalldealhistory()) {
	
		echo json_encode($status);

	
}


?>