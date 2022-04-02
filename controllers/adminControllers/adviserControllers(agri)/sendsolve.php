<?php 
    session_start();
    require('../../../models/farmer_post_problem_agri.php');
    $post = getallpost_agri();
    $adviser_username = $_SESSION['adviser_agri_username'];
    if(isset($_REQUEST['submit']))
    {
        $solve = $_REQUEST['solveProblem'];
        $farmer_username = $_REQUEST['farmer_username'];
        $problem = $_REQUEST['problem'];

        if($solve != null)
            {
                $send = solveproblem_agri($adviser_username,$farmer_username,$solve);
                if ($send) {
                    $delete = deletpost($farmer_username,$problem);
                    if($delete){
                        header('location: ../../../views/AdminViews/Advisier(Agriculture)/post.php?msg=done');
                    }

                    
                    
                }
                else
                {
                    header('location: ../../../views/AdminViews/Advisier(Agriculture)/post.php?msg=failed');
                }
            }
    }
?>