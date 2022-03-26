<?php 
    require('header.php');
    require('../../../models/adviser(eco)_info.php');
    $username =$_SESSION['adviser_eco_username'];
    $user = getuserinfo($username);
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
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
           <img src="proPic.jpg" width="150px" height="100px"><br>
           <h2>Name: <?=$user['Name']?></h2><br>
           <p>Adviser(Economics)</p>
           <p>Age:<?=$user['age']?></p>
           <p>gender: <?=$user['gender']?></p>
           <a href="EditProfile.php">Edit profile</a>
       </td>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>welcome,<?=$user['Name']?></h1><hr>
            <table  align="center" width="500px" >
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="post.php">Post</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="CostingGuidline.php">Make guidline</a></td>
                </tr>
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="bankingSupport.php">Banking support</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="ApplyForLeave.php">Apply for leave</a></td>
                </tr>
            </table>
            


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