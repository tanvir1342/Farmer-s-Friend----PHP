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
                    <td><a href="../../../controllers/adminControllers/VeterinarianControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <td width =10%; valign = top; style ="background-color:#C1BCBC; font-size:20px;">
            <a href="#">Farmer Post</a><br><br>
            <a href="#">History</a><br><br>
            <a href="approvePost.php">Edit Profile</a><br><br>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <form action="0" style="border:1px solid">
<div class="container">

<p>Please fill in this form to update your account Information.</p>
<hr>

<label for="username"><b>Change Username:</b></label>
<input type="text" placeholder="Enter New Username" name="username" required><br><br>

<label for="email"><b>Change Email:</b></label>
<input type="text" placeholder="Enter New Email" name="email" required><br><br>

<label for="psw"><b>Change Password:</b></label>
<input type="password" placeholder="Enter New Password" name="psw" required><br><br>

<label for="psw-repeat"><b>Confirm Password:</b></label>
<input type="password" placeholder="Confirm New Password" name="psw-repeat" required><br><br>

<label>
<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
</label><br><br>



<div class="clearfix">
<button type="button" class="cancelbtn">Cancel</button>
<button type="submit" class="updatebtn">Update</button><br><br>
</div>
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