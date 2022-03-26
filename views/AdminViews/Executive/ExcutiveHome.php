<?php 
    require('header.php');
    require('../../../models/Executive_info.php');
    $username = $_SESSION['Executive_username'];
    $user = getuserinfo($username);
    
    //echo $user['Name'];




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
                    <td><a href="../../../controllers/adminControllers/excecutiveControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
           <img src="proPic.jpg" width="150px" height="100px"><br>
           <h2></h2><br>
           <p><?=$user['Name']?></p>
           <p><?=$user['gender']?></p>
           <p><?=$user['age']?></p>
           <a href="EditProfile.php">Edit profile</a>
       </td>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>welcome,<?=$user['Name']?></h1><hr>
            <table  align="center" width="500px" >
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="listOfuser.php">user account</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="verifyDocument.php">verify document</a></td>
                </tr>
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="controlDeaL.php">control deal</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="approvePost.php">approve post</a></td>
                </tr>
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="EditProfile.php">Edit profile</a></td>
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