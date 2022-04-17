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

            <h1 align = center>Approve farmer and Retailer Dealing</h1><hr>
            <form>
                <table width="90%" border="1 px">
                    <tr>
                        <td>Farmer id</td>
                        <td>Retailer id</td>
                        <td>Product type</td>
                        <td>Product discription</td>
                        <td>Amount of product</td>
                        <td>Amount of money</td>
                        <td>resone for canceling</td>
                        <td>Status</td>
                    </tr>
                    <tr>
                        <td>55</td>
                        <td>00054</td>
                        <td>fish</td>
                        <td><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                        </p></td>
                        <td>100kg</td>
                        <td>1000000$</td>
                        <td><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                        </p></td>
                        <td>pending</td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="cancel"></td>
                    </tr>
                    
                </table>
            </form>
            <br>
            <form>
                <table width="90%" border="1 px">
                    <tr>
                        <td>Farmer id</td>
                        <td>Retailer id</td>
                        <td>Product type</td>
                        <td>Product discription</td>
                        <td>Amount of product</td>
                        <td>Amount of money</td>
                        <td>resone for canceling</td>
                        <td>Status</td>
                    </tr>
                    <tr>
                        <td>55</td>
                        <td>00054</td>
                        <td>fish</td>
                        <td><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                        </p></td>
                        <td>100kg</td>
                        <td>1000000$</td>
                        <td><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                        </p></td>
                        <td>pending</td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="cancel"></td>
                    </tr>
                    
                </table>
            </form>
            <br>
            
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