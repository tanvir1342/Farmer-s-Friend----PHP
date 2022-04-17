<?php 
    session_start();
    require('../../../models/farmer_vet_support.php');
    $post = getallpost();
    $username = $_SESSION['vet_username'];
    if(isset($_REQUEST['submit']))
    {
        $farmer_username = $_REQUEST['farmer_username'];
        $vet_username = $_REQUEST['vet_username'];
        $animal_type = $_REQUEST['animal_type'];
        $treatment = $_REQUEST['treatment'];

        if($treatment != null)
            {
                $send = treatment($farmer_username,$vet_username,$animal_type,$treatment);
                if ($send) {
                    /*$delete = deletpost($farmer_username,$problem);
                    if($delete){*/
                        header('location: ../../../views/AdminViews/Veterinarian/treatment.php?msg=done');
                    }

                    
                    
                }
                else
                {
                    header('location: ../../../views/AdminViews/Veterinarian/treatment.php?msg=failed');
                }
            }

?>