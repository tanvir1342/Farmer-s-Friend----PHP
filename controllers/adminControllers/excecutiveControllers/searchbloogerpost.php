<?php
require('../../../models/BloggerPost.php');
if (isset($_POST['word1'])) {
	$word = $_POST['word1'];
}
if ($status = live($word)) {
	
		echo json_encode($status);

	
}
else
{
	echo "data not found";
}


?>