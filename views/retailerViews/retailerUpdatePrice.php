<?php 
    require('header.php');
    require('../../models/Retailer_info.php');
    require('../../models/marketPrice.php');
    $username = $_SESSION['Retailer_username'];
    $user = getoneuser($username);
    $pricelist = getIN($username);
    //print_r($pricelist);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Table Creation -->
<table width = 100%; border = 1px>
    <tr  height = 100px style ="background-color:#C1BCBC ">
        <td width= 10%; align = center>
            <img width = 100px; height = 100px src = "logo.png">
        </td> 
        <!-- Top Menubar -->
        <td align="right">
            <table>
                <tr>
                    <td><a href="retailerHome.php">Home|</a></td>
                    <td><a href="#">  About US |</a></td>
                    <td><a href="../../controllers/retailerControllers/logout.php">  Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
 <!-- Dashboard of Retailer -->
         <td width =15% bgcolor="C1BCBC" valign="top" align="center">
             <a href="retailerEditAccount.php"> Edit Account </a><br><br> 
            <a href="retailerUpdatePrice.php"> Update & Post Latest Prices </a><br><br>
            <a href="dealWithFarmer.php"> Deal With Farmers </a><br><br>
            <a href="retailerTransportHistory.php"> Transport Products </a><br><br>
            <a href="retailerDealHistory.php"> Deal History </a><br><br>
            <a href="govTax.php"> Payment For Tax </a><br><br>
            <a href="makePayment.php"> Payment For Any Issue </a><br><br>           
        </td>
        <!-- Output -->
        <td valign="top">
            <h1 align="center"> Post Latest Prices </h1> <hr>

            <table width="100%"; border="1px">
                <tr>
                    <th>Retailer Name</th>
                    <th>username</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Status</th>    
                </tr>
                <?php

                    if ($pricelist!=null) {
                        foreach($pricelist as $pricelist)
                    {
                ?>
                <form method="POST" action="../../controllers/retailerControllers/updatefilechechk.php?prn=<?=$pricelist['2']?>">
                    <tr>
                    <td><input type="name" name="retailer_name" value="<?=$pricelist['0']?>" readonly="readonly"></td>
                    <td><input type="name" name="retailer_username" value="<?=$pricelist['1']?>" readonly="readonly"></td>
                    <td><input type="name" name="product_name" value="<?=$pricelist['2']?>"></td>
                    <td><input type="name" name="price" value="<?=$pricelist['3']?>"></td>
                    <td><input type="submit" name="submit" value="update"></td>
                </tr>
                </form>
                <?php
            }
        }?>
                
                   
            </table>
            <br>
            <h2 align="center">Insert new Data</h2>
            <form method="POST" action="../../controllers/retailerControllers/insertprice.php">
                <table align="center">
                    <tr>
                        <td>Retailer name:</td>
                        <td><input type="name" name="retailer_name" value="<?=$user['name']?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>Retailer username:</td>
                        <td><input type="name" name="retailer_username" value="<?=$user['username']?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>Product name:</td>
                        <td><input type="name" name="product_name" value=""></td>
                    </tr>
                    <tr>
                        <td>Price:</td>
                        <td><input type="name" name="price" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="insert"></td>
                    </tr>
                </table>
            </form>
        </td>
         
    <!-- Footer Part -->
   <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights Reserve by Gallant ltd.
        </td>
    </tr>

</table>
</html>