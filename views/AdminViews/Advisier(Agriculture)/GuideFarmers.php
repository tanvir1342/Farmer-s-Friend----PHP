
<?php 
    require('header.php');
?><!DOCTYPE html>
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
        <td width =10% bgcolor="C1BCBC" align="center" style="font-size:20px">
            <a href="AddviserHome(eco).php">Home</a>
            <a href="Post.php">Post</a><br><br>
            <a href="GuideFarmers.php">Make guidline</a><br><br>
            <a href="UploadTutorials.php">Upload Tutorials</a><br><br>
            <a href="ApplyForLeave.php">Apply for leave</a><br>
       </td>
        </td>
        <!-- Output -->
        <td valign="top">
            <h1 align="center">Make Guideline for Farmers</h1> <hr>
            <h3>Adviser Name : Soikot</h3>
            <textarea id ="guide" name="guide" rows="12" cols="180"></textarea><br>
            
            <a href="#">  Post This Guideline|</a>
            <a href="#">  Cancel</a>
        </td>
    </tr>
    <!-- Footer Part -->
    </tr>
    <!-- footer section -->
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           coppyright @2022
        </td>
    </tr>
</table>


</html>