<?php 
    require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
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
            <button div class="function_area" onclick="location.href='retailerTransportHistory.php';">Deal History</button>
            <button div class="function_area" onclick="location.href='retailerDealHistory.php';">Payment For Tax</button>
            <button div class="function_area" onclick="location.href='govTax.php';">Payment For Any Issue </button>
            <button div class="function_area" onclick="location.href='makePayment.php';">Edit profile</button>
     </div>
       </div>

       <div class="daynamic_area">

        
           <span align = center>Retailer Transport/Deal History</span>
		<div align="center" class="main_panle">
			<div>
				<div class="function_area" onclick="location.href='retailerTransportHistory.php';">
              <img src="image/cargo.png">
                <p>Check Transportation</p>
          </div>
           
            <div class="function_area" onclick="location.href='retailerDealHistory.php';">
              <img src="image/deals.png">
                <p>Check Deal History</p>
          </div>
        </div>
       </div>
   </div>



<!-- <table width="100%"; border="1px">
<tr height = 100px style ="background-color:#C1BCBC ">
		<td width="10%" align="center">
			<img  width="80px"; height="80px"; src="logo.png";  >
		</td>
		<td align="right">
			<a href="a">Home | </a>
			<a href="a">About Us | </a>
			<a href="../../controllers/retailerControllers/logout.php">Log Out</a>
		</td>
	</tr>
    <tr height = "700px" valign="top" >
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
             <a href="retailerEditAccount.php"> Edit Account </a><br><br> 
            <a href="retailerUpdatePrice.php"> Update & Post Latest Prices </a><br><br>
            <a href="dealWithFarmer.php"> Deal With Farmers </a><br><br>
            <a href="retailerTransportHistory.php"> Transport Products </a><br><br>
            <a href="retailerDealHistory.php"> Deal History </a><br><br>
            <a href="govTax.php"> Payment For Tax </a><br><br>
            <a href="makePayment.php"> Payment For Any Issue </a><br><br>          
        </td>
		<td valign="top"; align="center"><h1><u>Retailer Transport/Deal History</u></h1><hr>
			<button type="button"><a href="retailerTransportHistory.php">Check Transportation</a></button>
			<button type="button"><a href="retailerDealHistory.php">Check Deal history</a></button>
		</td>
	</tr>
	 
   <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights Reserve by Gallant ltd.
        </td>
    </tr>
</table> -->
</body>
</html>