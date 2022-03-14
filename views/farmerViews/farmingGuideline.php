<?php 
    require('header.php');
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
            <!-- Farmers post -->
            <h1 align="center">Farming Guideline</h1> <hr>
        <form>  
            <table>
                <tr>
                    <td></td>
                    <td>Types Of Guideline</td>
                    <td>
                        <select>
                            <option></option>
                            <option>Plantation</option>
                            <option>Husbandary</option>
                            <option>Fisheries</option>                    
                        </select>
                    </td>

                </tr>
                <tr>
                    <td></td>
                </tr>

            </table>
        </form>

                                <h3>Topic Name : Plantation</h3>
                                <p>What’s in this guide to starting a small farm?<br>
                                    The state of small farm business in the BD.
                                    Why do you want to start a small farm?
                                    What to do if you’ve never farmed before<br>
                                    Step 1: Identify your niche<br>
                                    Step 2: Find the land<br>
                                    Step 3: Get financed<br>
                                    Step 4: Planning a farm for success<br>
                                    Step 5: Marketing your farm and products<br></p>
                                <a href="#">  Like |</a>
                                <a href="#">  Comment |</a>

                                <h3>Topic Name : Husbandary</h3>
                                <p>What’s in this guide to starting a small farm?<br>
                                    The state of small farm business in the BD.
                                    Why do you want to start a small farm?
                                    What to do if you’ve never farmed before<br>
                                    Step 1: Identify your niche<br>
                                    Step 2: Find the land<br>
                                    Step 3: Get financed<br>
                                    Step 4: Planning a farm for success<br>
                                    Step 5: Marketing your farm and products<br></p>
                                <a href="#">  Like |</a>
                                <a href="#">  Comment |</a>

                                <h3>Topic Name : Fisheries</h3>
                                <p>What’s in this guide to starting a small farm?<br>
                                    The state of small farm business in the BD.
                                    Why do you want to start a small farm?
                                    What to do if you’ve never farmed before<br>
                                    Step 1: Identify your niche<br>
                                    Step 2: Find the land<br>
                                    Step 3: Get financed<br>
                                    Step 4: Planning a farm for success<br>
                                    Step 5: Marketing your farm and products<br></p>
                                <a href="#">  Like |</a>
                                <a href="#">  Comment |</a>
        </td>
    </tr>
    <!-- Footer Part -->
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights @2022 Reserved by Gallant ltd.
        </td>
    </tr>
</table>


</html>