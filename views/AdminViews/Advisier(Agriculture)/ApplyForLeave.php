<?php 
    require('header.php');
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
        <td width =10% bgcolor="C1BCBC" align="center" style="font-size:20px">
            <a href="AddviserHome(eco).php">Home</a>
            <a href="Post.php">Post</a><br><br>
            <a href="GuideFarmers.php">Make guidline</a><br><br>
            <a href="UploadTutorials.php">Upload Tutorials</a><br><br>
            <a href="ApplyForLeave.php">Apply for leave</a><br>
       </td>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Apply for Leave</h1><hr>
            <form method="post">
                <table border="1px" align="center">
                <tr>
                    <td>name</td>
                    <td>Id</td>
                    <td>Reasone for Leave</td>
                    <td>Leaving Date</td>
                    <td>Joining Date</td>
                    <td>Total Days</td>

                </tr>
                <tr>
                    <td><input type="name" name="name"></td>
                    <td><input type="number" name="id"></td>
                    <td><input type="text" name="reasoneForLeave"></td>
                    <td><input type="date" name="Form"></td>
                    <td><input type="date" name="to"></td>
                    <td><input type="number" name="totalDays"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
                
            </form>

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