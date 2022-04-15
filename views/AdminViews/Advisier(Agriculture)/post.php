<?php 
    require('header.php');
    require('../../../models/farmer_post_problem_agri.php');
    $post = getallpost_agri();
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
    </style>
</head>
<body>
       <!--  menubar start from here -->

    <div class="menubar">
        <div class="menubar-icon">
            <img src="image/logo.png">
        </div>
        <div class="menubar-link">
            <a href="AddviserHome(agri).php">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../../controllers/adminControllers/adviserControllers(agri) /logout.php"> Logout </a>
        </div>
        
    </div>

       <!--  main panel -->
    <div height="100%" class="main_panle">
       <!--  side panel div start from here -->
       <div  class="side_panel">      
        
            <div class="button_area_of_2nd_side_panel">
            <button onclick="location.href='Post.php';">Post</button>
            <button onclick="location.href='GuideFarmers.php';">Make Guideline</button>
            <button onclick="location.href='UploadTutorials.php';">Upload Tutorial</button>
            <button onclick="location.href='ApplyForLeave.php';">Apply For Leave</button>
      


        </div>
    </div>

    <!-- feature page -->

    <div class="daynamic_area">
        <h2 class="daynamic_area_heading_text">Farmer Post</h2><hr>
        <table align="center"class="create_user">
            <td>
            <input class="input" type="radio" id="Plantation" name="Farmer_type1" value="plantation">
            <label for="Plantation">Plantation</label>
            <input class="input" type="radio" id="Husbandary" name="Farmer_type2" value="husbandary">
            <label for="Husbandary">Husbandary</label>
            <input class="input" type="radio" id="Fisheries" name="Farmer_type3" value="fisheries">
            <label for="Fisheries">Fisheries</label><br>
            <?php
            if ($post!= null) {
                foreach($post as $post){
            ?>
            <form method="POST" action="../../../controllers/adminControllers/adviserControllers(agri)/sendsolve.php">
                <input class="input"  name="farmer_username" value="<?=$post['0']?>" readonly="readonly">
            <h3> Farmer type :<?=$post['1']?></h3>
            
               
               <textarea class="input"  name="problem" rows="5" cols="180" readonly='readonly'><?=$post['2']?></textarea>
            
           
                 <textarea id ="solve" name="solveProblem" rows="12" cols="180"></textarea><br>
                 <input class="submit_button" type="submit" name="submit" value="Send to Farmer">
            </form>
            
            <br>
            <?php

                }
            }
            ?>

        </td>
    </table>
</div>




















<!-- <!DOCTYPE html>
<html>

<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
             
                <tr style ="font-size:20px;">
                    <td><a href="#">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../../controllers/adminControllers/adviserControllers(agri)/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
   
    <tr  height = 700px>
        <td width =10% bgcolor="C1BCBC" align="center" style="font-size:20px">
            <a href="AddviserHome(agri).php">Home</a>
            <a href="Post.php">Post</a><br><br>
            <a href="CostingGuidline.php">Make guidline</a><br><br>
            <a href="bankingSupport.php">Banking support</a><br><br>
            <a href="ApplyForLeave.php">Apply for leave</a><br>
       </td>
        </td>
      
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Farmer's Posts</h1><hr>
            <input type="radio" id="Plantation" name="Farmer_type1" value="plantation">
            <label for="Plantation">Plantation</label>
            <input type="radio" id="Husbandary" name="Farmer_type2" value="husbandary">
            <label for="Husbandary">Husbandary</label>
            <input type="radio" id="Fisheries" name="Farmer_type3" value="fisheries">
            <label for="Fisheries">Fisheries</label><br>
            <?php
            if ($post!= null) {
                foreach($post as $post){
            ?>
            <form method="POST" action="../../../controllers/adminControllers/adviserControllers(agri)/sendsolve.php">
                <input style="border: none;" type="user" name="farmer_username" value="<?=$post['0']?>" readonly="readonly">
            <h3> Farmer type :<?=$post['1']?></h3>
            
               
               <textarea style="background-color: black;color: white;" name="problem" rows="5" cols="180" readonly='readonly'><?=$post['2']?></textarea>
            
           
                 <textarea id ="solve" name="solveProblem" rows="12" cols="180"></textarea><br>
                 <input type="submit" name="submit" value="send to Farmer">
            </form>
            
            <br>
            <?php

                }
            }
            ?>

        </td>
    </tr>
  
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           coppyright @2022
        </td>
    </tr>
</table>


</html> -->