<?php 
    require('header.php');
    $username = $_SESSION['Farmer_username'];
    $msg = "";
    if(isset($_GET['msg']))
    {
        if ($_GET['msg']== "updated") {
            $msg = "updated successful";
        }
    }
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
           <img src="jjjjj.jpg" width="150px" height="150px"><br>
           <h2>mhsoikot402</h2><br>
           <p>Farmer</p>
           <p>age:25</p>
           <p>Type : Plantation</p>
           <p>Gender: Male</p>
           <a href="farmerEditAccount.php">Edit profile</a>
       </td>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Welcome,"Farmer's Name"</h1><hr>
            <h3 align = center><?=$msg?></h3>

            <table  align="center" width="500px" >
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="farmerEditAccount.php">Edit Account</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="farmerPostProblems.php">Post For Problem</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="veterinarianSupport.php">Veterinarian Support</a></td>
                </tr>
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="farmerMachinariesGuidelines.php">Machiniaries Guidelines</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="farmingGuideline.php">Farming Guidelines</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="farmerBankingGuideline.php">Get Support From Bank</a></td>
                </tr>
                <tr>
                    
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="farmerMarketPrices.php">Market Prices</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="farmerDealsWithRetailer.php">Deal With Retailer</a></td> 
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="farmerCheckWeather.php">Check Weather</a></td>
                </tr>

                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="farmerWaterPayments.php">Water Payments</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="farmerGeneralPayments.php">General Payments</a></td> 
                </tr>
                 <tr>
                    
                </tr>
            </table>
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