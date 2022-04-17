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
    <title>Veterinarian Support</title>
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
            <button onclick="location.href='farmerBankingGuideline.php';">Farming Guideline</button>
            <button onclick="location.href='farmerEditAccount.php';">Get Support From Bank</button>
            <button onclick="location.href='farmerMarketPrices.php';" >Market Price</button>
            
            <!-- <button onclick="location.href='farmerCheckWeather.php';">Check Weather</button> -->
            <button onclick="location.href='farmerWaterPayments.php';">Water Payments</button>
            <button onclick="location.href='farmerGeneralPayments.php';">General Payments</button>        


        </div>
    </div>
    <div class="daynamic_area">
        <h2 class="daynamic_area_heading_text">Veterinarian Support</h2><hr>
    <form name="validationn" method="POST">
               <table align="center" style="font-size:20px;" class="create_user">
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input class="input" type="username" id ="username" name="username" value="<?=$user['username']?>" placeholder="Enter Username"></td>
                    </tr>
                    <br>
                    <tr>    
                        <td>Farmer Name:</td>
                        <td width="300px "><input class="input" type="name" id ="farmer_name" name="farmer_name" value="<?=$user['name']?>" placeholder="Enter Name"></td>
                        <td></td><br>

                    </tr>
                    <br>
                    <tr>
                        <td>Animal Type:</td>                        
                        <td width="300px "><input class="input" type="text" id ="animal_type" name="animal_type" value="" placeholder="Enter Animal Type"></td>               
                    </tr>
                    <br>
                    <tr>
                        <td>Description :</td>

                        <td><textarea class="input" id ="des" name="description" rows="12" cols="50"></textarea></td><br> 

                    </tr>
                  
                

                </table>
                            <div align="right"><input type="button" class="submit_button" onclick="vetsupinsert()"  name="submit" value="Submit"></div>
                            
            </form>
</div>
    <script>
        function vetsupinsert(){
            let username = document.getElementById('username').value;
            let farmer_name = document.getElementById('farmer_name').value;
            let animal_type = document.getElementById('animal_type').value;
            let description = document.getElementById('des').value;

            
            var dataString = 'username1=' + username + '&farmer_name1=' + farmer_name +  '&animal_type1=' + animal_type +  '&description1=' + description;
            console.log (dataString);  
            if (username == '' || farmer_name == '' || animal_type == '' || description == '') {
            alert("Null Value is Not Allowed");
            } else {
            // AJAX code to submit form.\

            let http = new XMLHttpRequest();
            http.open('POST', '../../controllers/farmerControllers/vetSupportCheck.php', true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send(dataString);
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
		<td valign="top">
			<h1 align="center">Veterinarian Support</h1><hr>
            <form method="POST" action="../../controllers/farmerControllers/vetSupportCheck.php">
                

        			<label>Userame:</label><br><br>
        			<input type="text" name="name" value="<?=$user['username']?>"><br><br>

        			<label>Farmer Name :</label><br><br>
        			<input type="name" name="fname" value="<?=$user['name']?>"><br><br>

                    <label>Animal Type : </label><br><br>
                    <input type="animaltype" name="animaltype" value=""><br><br>

        			<label>Description :</label><br><br>
        			<textarea id ="des" name="description" rows="12" cols="180"></textarea><br>		

        	
                    
                        <input type="submit" name="submit" value="submit">   
                        <input type="reset" name="reset" value="Cancel">
                  
               
		</td>	

	</tr>

    <table width="100%">
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights @2022 Reserved by Gallant ltd.
        </td>
    </tr>
    </table>
</table>


</html> -->