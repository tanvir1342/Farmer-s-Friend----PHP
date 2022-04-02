<?php 
    require('header.php');
    require('../../../models/farmer_post_problem_eco.php');
    $post = getallpost_eco();
?>
<!DOCTYPE html>
<html>
<!-- center table creation -->
<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
                <!-- center menubar -->
                <tr style ="font-size:20px;">
                    <td><a href="#">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../../controllers/adminControllers/adviserControllers(eco)/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <td width =10% bgcolor="C1BCBC" align="center" style="font-size:20px">
            <a href="AddviserHome(eco).php">Home</a>
            <a href="Post.php">Post</a><br><br>
            <a href="CostingGuidline.php">Make guidline</a><br><br>
            <a href="bankingSupport.php">Banking support</a><br><br>
            <a href="ApplyForLeave.php">Apply for leave</a><br>
       </td>
        </td>
        <!-- output of user -->
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
            <form method="POST" action="../../../controllers/adminControllers/adviserControllers(eco)/sendsolve.php">
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
    <!-- footer section -->
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           coppyright @2022
        </td>
    </tr>
</table>


</html>