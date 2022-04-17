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
        <td valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Create new user account</h1><hr>

            <!-- creat new user account  -->

            <table align="center" style="font-size:20px;">
                <tr>
                    <td>Name:</td>
                    <td width="300px "><input type="name" name="name" value=""></td>
                    <td>Email:</td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
                <br>
                <tr>
                    <td>phone number:</td>
                    <td width="300px "><input type="number" name="phoneNumber" value=""></td>
                    <td>Adress:</td>
                    <td><input type="text" name="adress" value=""></td>
                </tr>
                <br>
                <tr>
                    <td>Farmer type:</td>
                    <td width="300px "><input type="text" name="farmerType" value=""></td>
                    <td>NID number:</td>
                    <td><input type="number" name="nidNumber" value=""></td>
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