<?php 
    require('header.php');
    require('../../../models/farmer_info.php');
    $user = getuser();
    //print_r($user);
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

            <h3 align = center>Farmer user List</h3>
            <table border="1px" align="center" width="80%">
                <tr>
                    <td>username</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone number</td>
                    <td>Farmer Type</td>
                    <td>gender</td>
                    <td>Nid</td>
                    <td>Photo</td>
                </tr>
                <?php

                if($user!=null){
                foreach ($user as $user) {


                    ?>

                <tr>
                    <td><?=$user['0']?></td>
                    <td><?=$user['2']?></td>
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
            <h3 align="center">Creat new user</h3><br>
            <form method="POST" action="../../../controllers/adminControllers/excecutiveControllers/FarmerCreatAccount.php">
               <table align="center" style="font-size:20px;">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input type="name" name="name" value="" placeholder="Enter Name"></td>
                        <td>Email:</td>
                        <td><input type="email" name="email" value=""placeholder="Enter Email"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input type="username" name="username" value="" placeholder="Enter Username"></td>
                        <td>NID Number:</td>
                        <td><input type="number" name="nidNumber" value="" placeholder="Enter NID"></td> 
                    </tr>

                    <tr>
                        <td>Phone Number:</td>
                        <td width="300px "><input type="number" name="phoneNumber" value="" placeholder="Enter Phone Number"></td>
                        <td>Photo:</td>
                        <td><input type="file" name="" placeholder="Enter Photo"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Gender:</td>
                        <td width="300px "><input type="radio" name="gen" value="male" > Male 
                        <input type="radio" name="gen" value="female" > Female <input type="radio" name="gen" > Other </td>
                        <td>Farmer Type:</td>                        
                        <td width="300px "><input type="radio" name="farmerType" value="plantation" > Plantation <input type="radio" name="farmerType" value="Husbandry" > Husbandary <input type="radio" name="farmerType" value="Fisheries" > Fisheries </td>                 
                    </tr>
                    <br>
                    <tr>
                        <td>Password:</td>
                        <td width="300px "><input type="password" name="password" value="" placeholder="Enter Password"></td>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="cpassword" value=""placeholder="Confirm Password"></td>
                    </tr> 
                    
                    <!-- <table align="center" > -->
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  <input type="submit" name="submit" value="submit">   
                                  <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                    <!-- </table> -->
                

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