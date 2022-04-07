<?php 
    require('header.php');
    require('../../models/Retailer_info.php');
    $username = $_SESSION['Retailer_username'];
    $user = getoneuser($username);
?>
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Retailer Home</title>
</head>

<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
             
                <tr style ="font-size:20px;">
                    <td><a href="#">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../controllers/retailerControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>

 <tr  height = 700px>
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
           <img src="proPic.jpg" width="150px" height="100px"><br>
           <h2>Tanvir Mahmud</h2><br>
           <p>juniour excutive</p>
           <p>age:25</p>
           <p>gender:male</p>
           <a href="retailerEditAccount.php">Edit profile</a>
       </td>
        </td>
    </td>

        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Welcome To Retailer's Homepage,name</h1><hr>
            <table  align="center" width="500px" >
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="retailerEditAccount.php">User Account</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="retailerUpdatePrice.php">Update & Post Latest Prices</a></td>
                </tr>
                
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="retailerHistory.php">Transport/Deal History</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="dealWithFarmer.php">Deal With Farmers</a></td>
                </tr>
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="govTax.php">Payment For Tax</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="makePayment.php">Payment For Any Issue</a></td>
                </tr>
               
            </table>
            


        </td>
    </tr>

   <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights Reserve by Gallant ltd.
        </td>
    </tr>

</table>
</html>

 -->


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retailer Home</title>
    <link rel="stylesheet" type="text/css" href="template.css">
</head>
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
    <div class="main_panle">
     
       <div class="side_panel">
        <div class="pro-pic-of-side-panel">
            
        </div>
        <div class="text_area_of_side_panel">
             <h1><?=$user['name']?></h1>
            
             <p>Gender:<?=$user['Gender']?></p>

        </div>
             <div class="button_area_of_side_panel">
            <button>Edit Profile</button>

        </div>
       </div>
       
      <div class="daynamic_area">
        <h2 class="daynamic_area_heading_text">Welcome Retailer,<?=$user['name']?></h2><hr>
            <div class="function_area">
                <img src="image/update.png">
                <p>Update & Post Latest Prices</p>
           </div>
        
          <div class="function_area">
              <img src="image/control.png">
                <p>Transport/Deal History</p>
          </div>

          <div class="function_area">
              <img src="image/aprove.png">
                <p>Deal With Farmers</p>
          </div>
          <div class="function_area">
              <img src="image/aprove.png">
                <p>Payment For Tax</p>
          </div>
          <div class="function_area">
              <img src="image/aprove.png">
                <p>Payment For Any Issue</p>
          </div>

              
          </div>

        
    </div>

</body>
</html>
