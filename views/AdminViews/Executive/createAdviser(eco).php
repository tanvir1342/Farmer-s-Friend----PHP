<?php 
    require('header.php');
    require('../../../models/adviser(eco)_info.php');
    $user = getuser();
    $msg = "";
    if (isset($_GET['msg'])) {
        if($_GET['msg'] == 'done')
        {
            $msg = "created account";
        }
        if($_GET['msg'] == 'failed')
        {
            $msg = "created account failed";
        }
    }
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
                    <td><a href="Home.php">Home  |</a></td>
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

            <h3 align = center>Adviser(Economics) user List</h3>
            <table border="1px" align="center" width="80%">
                <tr>
                    <td>Name</td>
                    <td>username</td>
                    <td>email</td>
                    <td>gender</td>
                    <td>Age</td>
                    <td>salary</td>
                    <td>joining Date</td>
                    <td>photo</td>
                </tr>
                <?php

                if($user!=null){
                foreach ($user as $user) {


                    ?>

                <tr>
                    <td><?=$user['0']?></td>
                    <td><?=$user['1']?></td>
                    <td><?=$user['3']?></td>
                    <td><?=$user['4']?></td>
                    <td><?=$user['5']?></td>
                    <td><?=$user['6']?></td>
                    <td><?=$user['7']?></td>
                    <td>null</td>
                </tr>
                <?php
                    
                }
                }

                ?>
                
            </table><br>

            <!-- creat new user account  -->
            <h3 align="center"><?=$msg?></h3><br>
            <h3 align="center">Create new user</h3><br>

            <form method="POST" action="../../../controllers/adminControllers/excecutiveControllers/ecocreataccount.php">
                <table align="center">
                    <tr>
                        <td>Name</td>
                        <td><input type="name" name="name" value=""></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="username" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value=""></td>
                    </tr>
                     <tr>
                        <td>Gender</td>
                        <td><input type="text" name="gender" value=""></td>
                    </tr>
                     <tr>
                        <td>Age</td>
                        <td><input type="text" name="age" value=""></td>
                    </tr>
                    <tr>
                        <tr>
                        <td>salary</td>
                        <td><input type="number" name="salary" value=""></td>
                    </tr>
                    <tr>
                        <td>joining date</td>
                        <td><input type="date" name="join" value=""></td>
                    </tr>
                        <td colspan="2"><input type="submit" name="submit" value="create user"></td>
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