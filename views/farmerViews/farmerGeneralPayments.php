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
    <title>General Payment</title>
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
            <button onclick="location.href='veterinarianSupport.php';">Veterinarian Support</button>
            <button onclick="location.href='farmerMachinariesGuidelines.php';">Machinaries Guideline</button>
            <button onclick="location.href='farmingGuideline.php';">Farming Guideline</button>
            <button onclick="location.href='farmerBankingGuideline.php';">Get Support From Bank</button>
            <button onclick="location.href='farmerMarketPrices.php';" >Market Price</button>
            
            <!-- <button onclick="location.href='farmerCheckWeather.php';">Check Weather</button> -->
            <button onclick="location.href='farmerWaterPayments.php';">Water Payments</button>
            <button onclick="location.href='farmerGeneralPayments.php';">General Payments</button>        


        </div>
    </div>

    <!-- feature page -->



    <div class="daynamic_area">
        <h2 class="daynamic_area_heading_text">General Payment</h2><hr>

            <form method="POST">
                        <table align="center" style="font-size:20px;" class="create_user">

                             <tr>
                                    <td>Username:</td>
                                    <td width="300px "><input class="input" type="username" id="username" name="username" value="<?=$user['username']?>" placeholder="Enter Username"></td>
                             </tr>
                            <tr>
                                    <td>Payment Method:</td>                        
                                    <td width="300px "><input class="input"  type="radio" id="payment_method" name="payment_method" value="Bkash" > Bkash <input type="radio" id="payment_method" name="payment_method" value="Rocket" > Rocket <input type="radio" id="payment_method" name="payment_method" value="Bank" > Bank </td> 
                             </tr>


                            <tr>
                                <td>Phone:</td>
                                <td>
                                 <input class="input" type="number" id="Phone" name="Phone" value="<?=$user['phone_number']?>" placeholder="Enter Phone Number">
                                </td>
                            </tr>
                            <tr>
                                <td>Amount: </td>
                                <td>
                                <input class="input" type="number" id="Amount" name="Amount" value="" placeholder="Enter Amount">
                                </td>
                            </tr>
                            <tr>
                                <td>City/District: </td>
                                <td>
                                <input class="input"  type="text" id="city_district" name="city_district" value="" placeholder="Enter City/District">
                                </td>
                            </tr>
                            <tr>
                                <td>Pin/Pass Code: </td>
                                <td>
                                <input class="input" type="number" id="pin_pass" name="pin_pass" value="" placeholder="Enter Pin/Pass Code">
                                </td>
                            </tr>
                             <tr>
                                <td>Code: </td>
                                <td>
                                <input class="input"  type="number" id="code" name="code" value="" placeholder="Enter Code">
                                </td>
                            </tr>
                            <tr >
                                <td >
                                     <br><input type="button" class="submit_button" onclick="generalpayinsert()" value="Pay">
                                </td>
                            </tr>
                        </table>
            </form>


    </div>

<script>
        function generalpayinsert(){
            let username1 = document.getElementById('username').value;
            let payment_method1 = document.getElementById('payment_method').value;
            let Phone1 = document.getElementById('Phone').value;
            let Amount1 = document.getElementById('Amount').value;
            let city_district1 = document.getElementById('city_district').value;
            let pin_pass1 = document.getElementById('pin_pass').value;
            let code1 = document.getElementById('code').value;

            let http = new XMLHttpRequest();
            
            let json= {
                'username': username1,
                'payment_method': payment_method1,
                'Phone': Phone1,
                'Amount': Amount1,
                'city_district': city_district1,
                'pin_pass': pin_pass1,
                'code': code1
            };
            let data = JSON.stringify(json);

            // var dataString = 'username1=' + username + '&payment_method1=' + payment_method +  '&Phone1=' + Phone
            // +'&Amount1=' + Amount + '&city_district1=' + city_district + '&pin_pass1=' + pin_pass + '&code1=' + code ;
            // console.log (dataString);  
            if (username1 == '' || payment_method1 == '' || Phone1 == '' || Amount1 == '' || city_district1 == '' || pin_pass1 == '' || code1 == '') {
            alert("Null Value is Not Allowed");
            } else {
            // AJAX code to submit form.\

           
            http.open('POST', '../../controllers/farmerControllers/generalPaymentCheck.php', true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send('data='+data);
            http.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                alert(this.responseText);
            
              }
            }
         }
     }


    </script>







































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

  
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights @2022 Reserved by Gallant ltd.
        </td>
    </tr>
</table>


</html> -->