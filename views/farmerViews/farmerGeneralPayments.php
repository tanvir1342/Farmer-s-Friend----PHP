<?php 
    require('header.php');
    require('../../models/farmer_info.php');
     $username = $_SESSION['Farmer_username'];
     $user = getoneuser($username);
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
        <td valign="top"; align="center"><h1><u>General Payments</u></h1><hr>
            <form method="POST" action="../../controllers/farmerControllers/generalPaymentCheck.php">
                        <table >
                             <tr>
                                    <td>Username:</td>
                                    <td width="300px "><input type="username" name="username" value="<?=$user['username']?>" placeholder="Enter Username"></td>
                             </tr>
                            <tr>
                                    <td>Payment Method:</td>                        
                                    <td width="300px "><input type="radio" name="payment_method" value="Bkash" > Bkash <input type="radio" name="payment_method" value="Rocket" > Rocket <input type="radio" name="payment_method" value="Bank" > Bank </td> 
                             </tr>


                            <tr>
                                <td>Phone:</td>
                                <td>
                                 <input type="number" name="Phone" value="<?=$user['phone_number']?>" placeholder="Enter Phone Number">
                                </td>
                            </tr>
                            <tr>
                                <td>Amount: </td>
                                <td>
                                <input type="number" name="Amount" value="" placeholder="Enter Amount">
                                </td>
                            </tr>
                            <tr>
                                <td>City/District: </td>
                                <td>
                                <input type="text" name="city_district" value="" placeholder="Enter Username City/District">
                                </td>
                            </tr>
                            <tr>
                                <td>Pin/Pass Code: </td>
                                <td>
                                <input type="number" name="pin_pass" value="" placeholder="Enter Pin/Pass Code">
                                </td>
                            </tr>
                             <tr>
                                <td>Code: </td>
                                <td>
                                <input type="number" name="code" value="" placeholder="Enter Code">
                                </td>
                            </tr>
                            <tr >
                                <td >
                                     <br><input type="submit" name="submit" value="Pay">
                                </td>
                            </tr>
                        </table>
            </form>
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