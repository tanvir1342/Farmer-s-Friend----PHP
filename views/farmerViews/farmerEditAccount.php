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
    <title>Edit Account</title>
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
        <h2 class="daynamic_area_heading_text">Edit Account</h2><hr>
    <form name="validationn" method="POST" action="../../controllers/farmerControllers/updatecheck.php">
               <table align="center" style="font-size:20px;" class="create_user">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input class="input" type="name" name="name" value="<?=$user['name']?>" placeholder="Enter Name"></td>
                        <td>Email:</td>
                        <td><input class="input" type="email" name="email" value="<?=$user['email']?> "placeholder="Enter Email" onblur ="validation()"></td>
                        <td></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input class="input" type="username" name="username" value="<?=$user['username']?>" placeholder="Enter Username"></td>
                        <td>Phone Number:</td>
                        <td width="300px "><input  class="input" type="number" name="phoneNumber" value="<?=$user['phone_number']?>" placeholder="Enter Phone Number" onblur ="phonevalidation()" ></td>
                        <td></td><br>

                    </tr>

                    <tr>
                        <td>NID Number:</td>
                        <td><input class="input" type="number" name="nidNumber" value="<?=$user['nid']?>" placeholder="Enter NID"></td> 
                        <td>Photo:</td>
                        <td><input class="input" type="file" name="" placeholder="Enter Photo"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Gender:</td>
                        <td width="300px "><input class="input" type="radio" name="gen" value="<?=$user['gender']?>" > Male 
                        <input class="input" type="radio" name="gen" value="female" > Female <input class="input" type="radio" name="gen" > Other </td>
                        <td>Farmer Type:</td>                        
                        <td width="300px "><input class="input" type="radio" name="farmerType" value="<?=$user['farmer_type']?>"  > Plantation <input class="input" type="radio" name="farmerType" value="<?=$user['farmer_type']?>" > Husbandary <input class="input" type="radio" name="farmerType" value="<?=$user['farmer_type']?>" > Fisheries </td>                 
                    </tr>
                    <br>
                    <tr>
                        <td>Password:</td>
                        <td width="300px "><input class="input" id="password1" type="password" name="password" value="<?=$user['password']?>" placeholder="Enter Password"></td>
                        <td>Confirm Password:</td>
                        <td><input class="input" type="password" id="password2" name="cpassword" value=""placeholder="Confirm Password" onkeyup ="passchechk()">
                        </td>
                    </tr> 
                    
                   
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  
                                </td>
                            </tr>
                  
                

                </table>
                                  <input class="submit_button" id="submited" type="submit" name="submit" value="Update">  
                    
            </form>
</div>






















































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

        </td> -->
        <!-- Output -->
        <!-- <td valign="top">
            <h1 align="center"> Edit Your Account </h1> <hr>
            <table border="1" align="center">
            <form name="validationn" method="POST" action="../../controllers/farmerControllers/updateCheck.php" >
               <table align="center" style="font-size:20px;">
                    <tr>
                        <td>Change Name:</td>
                        <td width="300px "><input type="name" name="name" value="<?=$user['name']?>" placeholder="Enter New Name"></td>
                        <td>Change Email:</td>
                        <td><input type="email" name="email" value="<?=$user['email']?>" placeholder="Enter New Email" onblur ="validation()" onblur="submiton()" ></td>
                        <td><h1 id="eerror"></h1> </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Change Username:</td>
                        <td width="300px "><input type="name" name="username" value="<?=$user['username']?>" placeholder="Enter New Username"></td>
                        <td>Change Phone Number:</td>
                        <td width="300px "><input type="number" name="phoneNumber" value="<?=$user['phone_number']?>" placeholder="Enter New Phone Number"  onblur ="phonevalidation()"></td>
                        <td> <h1 id="nerror"></h1></td><br>
                    </tr>

                    <tr>
                        <td>Change NID Number:</td>
                        <td><input type="number" name="nidNumber" value="<?=$user['nid']?>" placeholder="Enter NID"></td>
                        <td>Change Photo:</td>
                        <td><input type="file" name="" placeholder="Enter New Photo"></td>
                    </tr>
                    <br>
                    <tr>
                         <td>Gender:</td>
                        <td width="300px "><input type="text" name="gen" value="<?=$user['gender']?>">
                        <td>Farmer Type:</td>                        
                        <td width="300px "><input type="text" name="farmerType" value="<?=$user['farmer_type']?>" ></td>                         
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td width="300px "><input type="password" name="password" value="<?=$user['password']?>" placeholder="Enter New Password"></td>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="pass" value="" placeholder="Confirm New Password"></td>
                    </tr>  -->
                    
                    <!-- <table align="center" > -->
                            <!-- <tr align="center" width=100%>
                                <td colspan="3">
                                  <input type="submit" name="submit" value="Update">   
                                  <input type="reset" name="reset" value="Cancel">
                                </td>
                            </tr> -->
                    <!-- </table> -->
                
<!-- 
                </table>
                    
            </form> 
        </td>
    </tr> -->
    <!-- Footer Part -->
<!--     <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights @2022 Reserved by Gallant ltd.
        </td>
    </tr>
</table> -->


<!-- </html> -->

<!-- <script>
    function validation()
    {
        let email = document.validationn.email.value;
        var pattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email.match(pattern))
        {
            document.getElementById('eerror').innerHTML = "";
            
        }
        else{
            document.getElementById('eerror').innerHTML = "invalid email";
        }
        
    }
    function phonevalidation()
    {
        let phonenumber = document.validationn.phoneNumber.value;
        var pnumber = /(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/;
        if(phonenumber.match(pnumber))
        {
            document.getElementById('nerror').innerHTML = "";
            
        }
        else{
            document.getElementById('nerror').innerHTML = "invalid phonenumber";
        }
        
    }
</script> -->