<?php 
    require('header.php');
    require('../../models/farmer_info.php');
     $username = $_SESSION['Farmer_username'];
     $user = getoneuser($username);
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="farmer.css">
    <link rel="stylesheet" type="text/css" href="farmercreateedit.css">
    <link rel="stylesheet" type="text/css" href="farmerHomes.css">

    <style>
    .button_area_of_2nd_side_panel{
        color: white;
        align-items: center;
        position: absolute;
        margin-left:25px;
        margin-top: 30px;
    }
    .button_area_of_2nd_side_panel button{
        width: 200px;
        height: 30px;
        font-size: 16px;
        margin: 10px;

    }
    .function_area{
        margin-left:250px;
    }
    </style>
</head>
<body>
       <!--  menubar start from here -->

    <div class="menubar">
        <div class="menubar-icon">
            <img src="images/logo.png">
        </div>
        <div class="menubar-link">
            <a href="farmerHome.php">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../controllers/farmerControllers/logout.php"> Logout </a>
        </div>
        
    </div>

       <!--  main panel -->
    <div height="100%" class="main_panle">
       <!--  side panel div start from here -->
       <div  class="side_panel">      
        
            <div class="button_area_of_2nd_side_panel">
            <button onclick="location.href='farmerPosttype.php';">Post For Problem</button>
            <button onclick="location.href='veterinarianSupport.php';">Veteranian Support</button>
            <button onclick="location.href='farmerMachinariesGuidelines.php';">Machinaries Guideline</button>
            <button onclick="location.href='farmerBankingGuideline.php';">Farming Guideline</button>
            <button onclick="location.href='farmerEditAccount.php';">Get Support From Bank</button>
            <button onclick="location.href='farmerMarketPrices.php';" >Market Price</button>
            <button onclick="location.href='farmerDealsWithRetailer.php';">Deal With Retailer</button>
            <button onclick="location.href='farmerCheckWeather.php';">Check Weather</button>
            <button onclick="location.href='farmerWaterPayments.php';">Water Payments</button>
            <button onclick="location.href='farmerGeneralPayments.php';">General Payments</button>        


        </div>
    </div>

    <!-- feature page -->

    <div class="daynamic_area">
        <h2 class="daynamic_area_heading_text">Get Support From Bank</h2><hr>
        <form name="validationn" method="POST" action="../../controllers/farmerControllers/getSupportfromBankCheck.php">
               <table align="center" style="font-size:20px;" class="create_user">
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input class="input" type="name" name="username" value="<?=$user['username']?>" ></td>
                        <td>Farmer's name:</td>
                        <td width="300px "><input class="input" type="name" name="farmer_name" value="" ></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Land Property:</td>
                        <td width="300px "><input class="input" type="text" name="land_property" value="" ></td>
                        <td>Yearly Income:</td>
                        <td width="300px "><input class="input" type="number" name="income" value="" ></td>

                    </tr>

                    <tr>
                        <td>Amount of Loan:</td>
                        <td width="300px "><input class="input" type="number" name="amount" value="" ></td>
                        <td>Reason For Loan:</td>
                        <td width="300px "><input class="input" type="name" name="reason_for_loan" value="" ></td>
                    </tr>                    
                
                

                </table>
                                  <input class="submit_button" id="submited" type="submit" name="submit" value="Get Support">  
                    
            </form>
</div>





















































<!-- <!DOCTYPE html>
<html>

<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
              
                <tr style ="font-size:20px;">
                    <td><a href="farmerHome.php">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../controllers/farmerControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>

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
        <td valign="top"; >
            <h1 align="center"><u>Get Support From Bank</u></h1><hr>
            <form method="POST" action="../../controllers/farmerControllers/getSupportfromBankCheck.php">                
                        <table >
                             <tr>
                                    <td>Username:</td>
                                    <td width="300px "><input type="username" name="username" value="" placeholder="Enter Username"></td>
                             </tr>
                              <tr>
                                    <td>Farmer's name:</td>
                                    <td width="300px "><input type="text" name="farmer_name" value="" placeholder="Enter Farmer Name"></td>
                             </tr>
                             
                              <tr>
                                    <td>Land Property:</td>
                                    <td width="300px "><input type="landproperty" name="land_property" value="" placeholder="Enter Property Details"></td>
                             </tr>
                             <tr>
                                    <td>Yearly Income:</td>
                                    <td width="300px "><input type="number" name="income" value="" placeholder="Enter Yearly Income"></td>
                             </tr>

                              <tr>
                                    <td>Amount of Loan:</td>
                                    <td width="300px "><input type="number" name="amount" value="" placeholder="Enter Loan Amount"></td>
                             </tr>

                            <tr>
                                    <td>Reason For Loan:</td>
                                    <td><textarea id ="reason" name="reason_for_loan" rows="12" cols="180"></textarea></td>
                             </tr>
                            <tr >
                                <td >
                                     <br><input type="submit" name="submit" value="Submit">
                                </td>
                            </tr>
                        </table>
            </form>
        </td>
    </tr>


    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights @2022 Reserved by Gallant ltd.
        </td>
    </tr>
</table>


</html> -->