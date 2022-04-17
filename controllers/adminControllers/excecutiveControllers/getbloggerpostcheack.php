<?php
require('../../../models/BloggerPost.php');
if ($status = getallpost()) {
	
		echo json_encode($status);

	
}


?>