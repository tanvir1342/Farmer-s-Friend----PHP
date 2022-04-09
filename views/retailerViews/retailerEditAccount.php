<?php 
    require('header.php');
    require('../../models/Retailer_info.php');
    $username = $_SESSION['Retailer_username'];
    $user = getoneuser($username);
    
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>edit profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="createUser.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="menubar">
        <div class="menubar-icon">
            <img src="image/logo.png">
        </div>
        <div class="menubar-link">
            <a href="">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../../controllers/adminControllers/excecutiveControllers/logout.php"> Logout </a>
        </div>
        
    </div>
     
      <div class="side_panel">
             <div class="button_area_of_2nd_side_panel">
             <button div class="function_area" onclick="location.href='retailerEditAccount.php';">Edit Account</button>
            <button div class="function_area" onclick="location.href='retailerUpdatePrice.php';">Latest Prices</button>
            <button  div class="function_area" onclick="location.href='dealWithFarmer.php';">Deal With Farmers</button>
            <button  div class="function_area" onclick="location.href='retailerTransportHistory.php';">Transport History</button>
            <button div class="function_area" onclick="location.href='retailerDealHistory.php';">Deal History</button>
            <button div class="function_area" onclick="location.href='govTax.php';">Payment For Tax</button>
            <button div class="function_area" onclick="location.href='makePayment.php';">Payment For Any Issue </button>
     </div>
       </div>
  
<div>
    <center>
    <div class="daynamic_area">
        <span align = center>Edit Your Profile</span>
        <div class="userTable">
        <table>
<form name="validationn" method="POST" action="../../controllers/retailerControllers/retailer_edit.php" >
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?=$user['name']?>" ></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?=$user['username']?>"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="<?=$user['password']?>"></td>
        </tr>
        <tr>
            <td>NID Number</td>
            <td><input type="number" name="nidnumber" value="<?=$user['nidNumber']?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" onblur ="validation()" onblur="submiton()"  value="<?=$user['email']?>">
            </td>
            <td><h1 id="eerror"></h1>
       </td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>
                <input type="number" name="phoneNumber" onblur ="phonevalidation()"  value="<?=$user['phone_Number']?>   ">
               
            </td>
            <td> <h1 id="nerror"></h1></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>
                <input type="file" name="">
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="text" name="gen" value="<?=$user['name']?>" >
              
            </td>
        </tr> 
        <tr>
            <td>Trade License Number</td>
            <td>
                <input type="number" name="licNumber" value="<?=$user['trade_License_Number']?>">
            </td>
        </tr>


        <tr>
            <td>Trade License Copy</td>
            <td>
                <input type="file" name="">
            </td>
        </tr>        
        <tr height ="20">
            <td colspan="2"></td>
        </tr>   
        <tr height ="20" align="right">
            <td colspan="2">
                <input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Reset">
            </td>
        </tr>
    </form>
        

    </table>
        </div>
    </div>
    </center>

</div>

<!-- Table Creation -->
<!-- <table width = 100%; border = 1px>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width= 10%; align = center>
            <img width = 100px; height = 100px src = "logo.png">
        </td> 
      
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
 
    <tr height="700px">

        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
            <a href="retailerEditAccount.php"> Edit Account </a><br><br> 
            <a href="retailerUpdatePrice.php"> Update & Post Latest Prices </a><br><br>
            <a href="dealWithFarmer.php"> Deal With Farmers </a><br><br>
            <a href="retailerTransportHistory.php"> Transport Products </a><br><br>
            <a href="retailerDealHistory.php"> Deal History </a><br><br>
            <a href="govTax.php"> Payment For Tax </a><br><br>
            <a href="makePayment.php"> Payment For Any Issue </a><br><br>           
        </td>
       
        <td valign="top">
            <h1 align="center"> Edit Your Account </h1> <hr>
            <table  align="center">
        <tr align="center" height="100px">
            <th colspan="2" width="400px">
                Fill Up Your Details
            </th>
        </tr>
        <form name="validationn" method="POST" action="../../controllers/retailerControllers/retailer_edit.php" >
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?=$user['name']?>" ></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?=$user['username']?>"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="<?=$user['password']?>"></td>
        </tr>
        <tr>
            <td>NID Number</td>
            <td><input type="number" name="nidnumber" value="<?=$user['nidNumber']?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" onblur ="validation()" onblur="submiton()"  value="<?=$user['email']?>">
            </td>
            <td><h1 id="eerror"></h1>
       </td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>
                <input type="number" name="phoneNumber" onblur ="phonevalidation()"  value="<?=$user['phone_Number']?>   ">
               
            </td>
            <td> <h1 id="nerror"></h1></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>
                <input type="file" name="">
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="text" name="gen" value="<?=$user['name']?>" >
              
            </td>
        </tr> 
        <tr>
            <td>Trade License Number</td>
            <td>
                <input type="number" name="licNumber" value="<?=$user['trade_License_Number']?>">
            </td>
        </tr>


        <tr>
            <td>Trade License Copy</td>
            <td>
                <input type="file" name="">
            </td>
        </tr>        
        <tr height ="20">
            <td colspan="2"></td>
        </tr>   
        <tr height ="20" align="right">
            <td colspan="2"><input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Reset"></td>
        </tr>
    </form>
        

    </table>
             
        </td>
    </tr>
  
   <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights Reserve by Gallant ltd.
        </td>
    </tr>

</table> 
</body>
</html>-->

<script>
    function validation()
    {
        let email = document.validationn.email.value;
        var pattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email.match(pattern))
        {
            document.getElementById('eerror').innerHTML = "";
            
        }
        else{
            document.getElementById('eerror').innerHTML = "Invalid Email";
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
            document.getElementById('nerror').innerHTML = "Invalid Phone Number";
        }
        
    }
</script>