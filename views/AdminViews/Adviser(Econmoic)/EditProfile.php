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
                    <td><a href="#"> logout</a></td>
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

            <h1 align = center>Edit Profile</h1><hr>
            <form name="validationn" method="POST" action="../../../controllers/adminControllers/adviserControllers(eco)/editProfileChechk.php">
                <table align="center">
                    <tr>
                        <td>Name</td>
                        <td><input type="name" name="name" value="<?=$user['Name']?>"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="username" name="username" value="<?=$user['username']?>"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="<?=$user['password']?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="<?=$user['email']?>" onblur ="validation()" onblur="submiton()"  ></td>
                        <td><h1 id="eerror"></h1> </td>
                    </tr>
                     <tr>
                        <td>Gender</td>
                        <td><input type="text" name="gender" value="<?=$user['gender']?>"></td>
                    </tr>
                     <tr>
                        <td>Age</td>
                        <td><input type="text" name="age" value="<?=$user['age']?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Edit Profile"></td>
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

<script>
    function validation()
    {
        let email = document.validationn.email.value;
        var pattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email.match(pattern))
        {
            document.getElementById('eerror').innerHTML = "";
            
        }
        else{
            document.getElementById('eerror').innerHTML = "invalid email";
        }
        
    }
</script>