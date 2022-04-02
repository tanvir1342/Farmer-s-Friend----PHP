<?php 
    require('header.php');
    require('../../models/marketPrice.php');
    $pricelist = getall();
?>
<!DOCTYPE html>
<html>
<!-- Table creation -->
<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
                <!-- center menubar -->
                <tr style ="font-size:20px;">
                    <td><a href="farmerHome.php">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../controllers/farmerControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
 <!-- Dashboard of Farmer -->
  <tr  height = 700px>
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">

            <a href="farmerEditAccount.php"> Edit Account </a><br><br> 
            <a href="farmerPostProblems.php"> Post For Problem </a><br><br>
            <a href="farmerMachinariesGuidelines.php"> Machiniaries Guidelines </a><br><br>
            <a href="veterinarianSupport.php"> Veterinarian Support </a><br><br>
            <a href="farmingGuideline.php"> Farming Guidelines </a><br><br>
            <a href="farmerMarketPrices.php"> Market Prices </a><br><br>
            <a href="farmerCheckWeather.php"> Check Weather </a><br><br>
            <a href="farmerDealsWithRetailer.php"> Deal With Retailers </a><br><br>
            <a href="farmerBankingGuideline.php"> Get Support From Bank </a><br><br>
            <a href="farmerGeneralPayments.php"> General Payments </a><br><br>
            <a href="farmerWaterPayments.php"> Water Payments </a><br>	

		</td>
        <!-- Output -->
        <td valign="top">
            <h1 align="center"> Current Market Prices </h1> <hr>

            <table width="100%"; border="1px">
                <tr align="center">
                    <th>Retailer Name</th>
                    <th>Retailer username</th>
                    <th>product_name</th>
                    <th>price</th> 
                    <th>Stutas</th>                      
                </tr>
                <?php
                    if ($pricelist!=null) {
                        foreach($pricelist as $pricelist){
                            ?>
                <tr align="center">
                    <td><?=$pricelist[0]?></td>
                    <td><?=$pricelist[1]?></td>
                    <td><?=$pricelist[2]?></td>
                    <td><?=$pricelist[3]?></td>
                    <td><input type="submit" name="submit" value="deal"></td>
                </tr> 
                <?php
                }
                }
                ?>  
            </table>
        </td>
         
    <!-- Footer Part -->
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights @2022 Reserved by Gallant ltd.
        </td>
    </tr>
</table>


</html>




