<?php 
    session_start();
    require('../../../models/farmer_post_problem_eco.php');
    $post = getallpost_eco();
    $adviser_username = $_SESSION['adviser_eco_username'];
    if(isset($_REQUEST['submit']))
    {
        $solve = $_REQUEST['solveProblem'];
        $farmer_username = $_REQUEST['farmer_username'];
        $problem = $_REQUEST['problem'];

        if($solve != null)
            {
                $send = solveproblem_eco($adviser_username,$farmer_username,$solve);
                if ($send) {
                    $delete = deletpost($farmer_username,$problem);
                    if($delete){
                        header('location: ../../../views/AdminViews/Adviser(Econmoic)/post.php?msg=done');
                    }

                    
                    
                }
                else
                {
                    header('location: ../../../views/AdminViews/Adviser(Econmoic)/post.php?msg=failed');
                }
            }
    }
?>