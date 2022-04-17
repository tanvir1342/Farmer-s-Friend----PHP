<?php 
    require('header.php');
    require('../../../models/farmer_post_problem_eco.php');
    $post = getallpost_eco();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farmer Post</title>
    <link rel="stylesheet" type="text/css" href="Home.css">
    <link rel="stylesheet" type="text/css" href="createUser.css">
    <style>
    .button_area_of_2nd_side_panel{
        color: white;
        align-items: center;
        position: absolute;
        margin-left:25px;
        margin-top: 30px;
    }
    .button_area_of_2nd_side_panel button{
        width: 200px;
        height: 30px;
        font-size: 16px;
        margin: 10px;

    }
    .function_area{
        margin-left:250px;
    }
    .s_button{
        background-color:green;
        font-size: 16px;
        color: white;
        border: none;
    }
    </style>
</head>
<body>
       <!--  menubar start from here -->

    <div class="menubar">
        <div class="menubar-icon">
            <img src="image/logo.png">
        </div>
        <div class="menubar-link">
            <a href="AddviserHome(eco).php">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../../controllers/adminControllers/adviserControllers(eco)/logout.php"> Logout </a>
        </div>
        
    </div>

       <!--  main panel -->
    <div height="100%" class="main_panle">
       <!--  side panel div start from here -->
       <div  class="side_panel">      
        
            <div class="button_area_of_2nd_side_panel">
            <button onclick="location.href='Post.php';">Post</button>
            <button onclick="location.href='CostingGuidline.php';">Make Guideline</button>
            <button onclick="location.href='bankingSupport.php';">Banking Support</button>
            <button onclick="location.href='ApplyForLeave.php';">Apply For Leave</button>
      


        </div>
    </div>

    <!-- feature page -->

<div class="daynamic_area">

        <h2 class="daynamic_area_heading_text">Farmer Post</h2><hr>
        <table align="center"class="create_user">
            <td>
            
<?php
            if ($post!= null) {
                foreach($post as $post){
            ?>
            <form method="POST" action="../../../controllers/adminControllers/adviserControllers(eco)/sendsolve.php">
                <h3>Farmer username:</h3>
                <input style="border: none;" class="input" type="user" name="farmer_username" value="<?=$post['0']?>" readonly="readonly">
            <h3> Farmer type :<?=$post['1']?></h3>
            
               
               <textarea style="background-color: #3498db;color: white;" class="input" name="problem" rows="30" cols="100" readonly='readonly'><?=$post['2']?></textarea>
            
           
                 <textarea id ="solve" name="solveProblem" rows="12" cols="100"></textarea><br>
                 <input type="submit" class="s_button" name="submit" value="send to Farmer">
            </form>
            <hr>
            
            <br>
            <?php

                }
            }
            ?>

        </td>
    </table>
</div>
