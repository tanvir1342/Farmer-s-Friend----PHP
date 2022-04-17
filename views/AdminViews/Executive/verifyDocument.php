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
                    <td><a href="ExcutiveHome.php">Home |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../../controllers/adminControllers/excecutiveControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
  <tr  height = 700px>
        <td width =10%; valign = top; style ="background-color:#C1BCBC; font-size:20px;">
            <a href="listOfuser.php">user Account</a><br><br>
            <a href="verifyDocument.php">verfiy ducument</a><br><br>
            <a href="controlDeaL.php">control deal</a><br><br>
            <a href="approvePost.php">Approve post</a><br><br>
            <a href="EditProfile.php">Edit profile</a><br><br>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>verify retailer document</h1><hr>
            <table border="1px" align="center" width="80%">
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone number</td>
                    <td>trade license</td>
                    <td>document</td>
                    <td>NID</td>
                    <td>status</td>
                </tr>
                <tr>
                    <td>Tomal</td>
                    <td>tomal@gmail.com</td>
                    <td>01777777777777</td>
                    <td>441414</td>
                    <td>document</td>
                    <td>441341564445q36626</td>
                    <td><a href="">pending</a></td>
                </tr>
                <tr>
                    <td>Tomal</td>
                    <td>tomal@gmail.com</td>
                    <td>01777777777777</td>
                    <td>441414</td>
                    <td>document</td>
                    <td>441341564445q36626</td>
                    <td><a href="">pending</a></td>
                </tr>
                <tr>
                    <td>Tomal</td>
                    <td>tomal@gmail.com</td>
                    <td>01777777777777</td>
                    <td>441414</td>
                    <td>document</td>
                    <td>441341564445q36626</td>
                    <td><a href="">pending</a></td>
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