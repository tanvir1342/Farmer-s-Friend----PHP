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

            <h1 align = center>Give Tratment</h1><hr>
            <form method="POST" action="../../../controllers/adminControllers/VeterinarianControllers/VetScheduleCheck.php">
            <label><b>Farmer username:</b></label><br><br>
            <input type="username" name="farmer_username"><br><br>
            <label><b>Veterinarian username:</b></label><br><br>
            <input type="username" name="vet_username"><br><br>
            <label><b>Animal Type:</b></label><br><br>
            <input type="text" name="animal_type"><br><br>
            <label><b>Description:</b></label>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lectus magna, vestibulum non molestie ac, sagittis ornare dui. Nam sit amet vulputate tortor, ac vestibulum risus. Maecenas feugiat est eu arcu venenatis, nec imperdiet dolor vehicula. Etiam diam orci, molestie ac convallis vel, commodo vitae tortor. Donec quis egestas nisi. Integer diam nisi, ornare at dui a, eleifend suscipit orci. Etiam vestibulum nulla a nulla interdum iaculis. Nam feugiat auctor arcu sit amet volutpat. Sed porttitor purus id felis auctor iaculis. Etiam volutpat lorem ut efficitur bibendum. In dictum tincidunt velit id fermentum. Nam at nisi in est pretium sodales. Curabitur laoreet ante eu dui ullamcorper, at porta sapien lobortis. Praesent aliquam lectus ex, a malesuada est finibus ut. Quisque eget erat ornare, finibus diam at, ornare nisl. Fusce nec consequat lorem.
            </p>
            <h3>Set time and date</h3>
            <input type="datetime-local" id="" name="schedule"><br><br>
            <input type="submit">
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