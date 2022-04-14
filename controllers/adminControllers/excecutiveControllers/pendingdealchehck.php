<?php
require('../../../models/pendingdeal.php');
if ($status = getallpendingdeal()) {
	echo json_encode($status);
}

?>