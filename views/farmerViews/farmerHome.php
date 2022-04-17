<?php 
    require('header.php');

    $username = $_SESSION['Farmer_username'];
    require('../../models/farmer_info.php');
    $user = getoneuser($username);
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
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="farmer.css">
</head>
<body>
       <!--  menubar start from here -->

    <div class="menubar">
        <div class="menubar-icon">
            <img src="images/logo.png">
        </div>
        <div class="menubar-link">
            <a href="">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../controllers/farmerControllers/logout.php"> Logout </a>
        </div>
        
    </div>

       <!--  main panel -->
    <div height="100%" class="main_panle">
       <!--  side panel div start from here -->
       <div class="side_panel">
        <div class="pro-pic-of-side-panel"></div>
        <img style="width:200px;height:200px;border-radius: 100% ;" src="../../models/Farmerupload/<?=$user['photo']?>" >
        <div class="text_area_of_side_panel">
             <h1><?=$user['name']?></h1>             
             <p>Gender:<?=$user['gender']?></p>

        </div>
             <div class="button_area_of_side_panel">
            <button onclick="location.href='farmerEditAccount.php';">Edit Profile</button>

        </div>
       </div>
      <!--  main panel daynamic area star from here -->
      <div class="daynamic_area">
        <h2 class="daynamic_area_heading_text">Welcome Farmer,<?=$user['name']?></h2><hr>
            <div onclick="location.href='farmerEditAccount.php';" class="function_area">
                <img src="images/edit.png">
                <p>Edit Account</p>
           </div>
        
          <div onclick="location.href='farmerPosttype.php';" class="function_area">
              <img src="images/postproblem.png">
                <p>Post For Problem</p>
          </div>

          <div onclick="location.href='veterinarianSupport.php';" class="function_area">
              <img src="images/support.png">
                <p>Veterinarian Support</p>
          </div><br>
          <div onclick="location.href='farmerMachinariesGuidelines.php';" class="function_area">
              <img src="images/machinaries.png">
                <p>Machiniaries Guidelines</p>
          </div>
          <div onclick="location.href='farmingGuideline.php';" class="function_area">
              <img src="images/farmingguideline.jpg">
                <p>Farming Guidelines</p>
          </div>
          <div onclick="location.href='farmerBankingGuideline.php';" class="function_area">
              <img src="images/supportfrombank.jpg">
                <p>Get Support From Bank</p>
          </div><br>
          <div onclick="location.href='farmerMarketPrices.php';" class="function_area">
              <img src="images/marketprices.png">
                <p>Market Prices</p>
          </div>
<!--           <div onclick="location.href='farmerDealsWithRetailer.php';" class="function_area">
              <img src="images/dealwithretailers.jpg">
                <p>Deal With Retailer</p>
          </div>
          <div onclick="location.href='farmerCheckWeather.php';" class="function_area">
              <img src="images/weather.png">
                <p>Check Weather</p>
          </div><br> -->
          <div onclick="location.href='farmerWaterPayments.php';" class="function_area">
              <img src="images/waterPayment.png">
                <p>Water Payments</p>
          </div>
          <div onclick="location.href='farmerGeneralPayments.php';" class="function_area">
              <img src="images/generalPayment.jpg">
                <p>General Payments</p>
          </div>


              
          </div>

        
    </div>

</body>
</html>



















































<!-- <!DOCTYPE html>
<html> -->
<!-- Table creation -->
<!-- <table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table > -->
                <!-- center menubar -->
<!--                 <tr style ="font-size:20px;">
                    <td><a href="farmerHome.php">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../controllers/farmerControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr> -->
 <!-- Dashboard of Farmer -->
<!--   <tr  height = 700px>
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
           <img src="jjjjj.jpg" width="150px" height="150px"><br>
           <h2>mhsoikot402</h2><br>
           <p>Farmer</p>
           <p>age:25</p>
           <p>Type : Plantation</p>
           <p>Gender: Male</p>
           <a href="farmerEditAccount.php">Edit profile</a>
       </td>
        </td> -->
        <!-- output of user -->
<!--         <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Welcome,"Farmer's Name"</h1><hr>
            <h3 align = center><?=$msg?></h3>

            <table  align="center" width="500px" >
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="farmerEditAccount.php">Edit Account</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="farmerPosttype.php">Post For Problem</a></td>
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
    </tr> -->
    <!-- Footer Part -->
<!--     <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights @2022 Reserved by Gallant ltd.
        </td>
    </tr>
</table>
</html> -->