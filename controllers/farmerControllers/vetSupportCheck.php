<?php 
session_start();
require('../../models/farmer_vet_support.php');

if(isset($_POST['username1']) && isset ($_POST['farmer_name1']) && isset ($_POST['animal_type1']) && isset ($_POST['description1']))
{
	
	$username = $_POST['username1'];
	$farmer_name = $_POST ['farmer_name1'];
	$animal_type = $_POST['animal_type1'];
	$description = $_POST['description1'];

	{

		$status = support ($username,$farmer_name,$animal_type,$description);
		if($status)
		{
            echo "You Will Be Notified";
        }
        else
        {
            echo "Something is Wrong!";
        }


	}
}

?>