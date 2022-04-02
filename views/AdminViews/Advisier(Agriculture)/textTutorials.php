<?php 
    require('header.php');
    $username = $_SESSION['adviser_agri_username'];
  
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
                    <td><a href="../../../controllers/adminControllers/adviserControllers(agri)/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
           <img src="proPic.jpg" width="150px" height="100px"><br>
           <h2>Tanvir Mahmud</h2><br>
           <p>Adviser(Economics)</p>
           <p>age:25</p>
           <p>gender:male</p>
           <a href="EditProfile.php">Edit profile</a>
       </td>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>welcome,name</h1><hr>
            <!-- <form method="POST" enctype="multipart/form-data" action="../../../controllers/adminControllers/adviserControllers(agri)/textfilechehck.php">
                <input type="file" name="textfile" ><br>
                <label>upload only txt file</label><br>
                <input type="submit" name="submit" value="upload">
            </form> -->
            
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