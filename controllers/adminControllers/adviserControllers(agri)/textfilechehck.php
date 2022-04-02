<!-- <?php

session_start();
$username = $_SESSION['adviser_agri_username'];
require('../../../models/tutorial_info.php');


if (isset($_POST['submit'])) {
	
			
				$src = $_FILES['textfile']['tmp_name'];
		
				$des = '../../../models/'.basename($_FILES['textfile']['name']);
				move_uploaded_file($src,$des);
				
				$status = textfileupload($username,$des);
				header('location: ../../../views/AdminViews/Advisier(Agriculture)/textTutorials.php?msg=done');
			}
			
			
			/*else{
				header('location: ../../../views/AdminViews/Advisier(Agriculture)/textTutorials.php?msg=filed');
				
			}	*/
		

		
	

?> -->