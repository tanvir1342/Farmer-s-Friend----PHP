<?php 
    require('header.php');
    require('../../models/transport.php');
    require('../../models/Retailer_info.php');
    $username = $_SESSION['Retailer_username'];
    $usertransport = getonehistory($username);
    $user = getoneuser($username);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Transpor Deal</title>
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
            <button  div class="function_area" onclick="location.href='retailerTransportHistory.php';">Transport Deal</button>
            <button div class="function_area" onclick="location.href='retailerDealHistory.php';">Deal History</button>
            <button div class="function_area" onclick="location.href='govTax.php';">Payment For Tax</button>
            <button div class="function_area" onclick="location.href='makePayment.php';">Payment For Any Issue </button>
            
     </div>
       </div>

        <div class="daynamic_area">
        
           <span align = center>Transport History</span>
            <table border="1px" align="center" width="10%" id="userTable">
                <tr>
                    <th>Retailer Name</th>
                    <th>username</th>
                    <th>From</th>
                    <th>To</td>
                    <th>Product name</th>
                    <th>Weight</th>
                    <th>date</th>
                    <th>Status</th>
                   
                </tr>
                <?php
				if ($usertransport!=null) {
					foreach($usertransport as $usertransport)
					{

			?>

               
               <form>
					<tr>
					<td><input type="name" name="retailer_name" value="<?=$usertransport[0]?>" readonly="readonly"></td></td>
					<td><input type="name" name="retailer_username" value="<?=$usertransport[1]?>" readonly="readonly"></td>
					<td><input type="text" name="froms" value="<?=$usertransport[2]?>"></td>
					<td><input type="text" name="too" value="<?=$usertransport[3]?>"></td>
					<td><input type="text" name="product_name" value="<?=$usertransport[4]?>"></td>
					<td><input type="text" name="weight" value="<?=$usertransport[5]?>"></td>
					<td><input type="date" name="date" value="<?=$usertransport[6]?>"></td>
					<td><input type="submit" name="submit" value="Cancel"></td>
					
				</tr>


				</form>
				<?php
			}
		}
		?>
                
            </table><br>


			<span align = center>Apply for transport</span>
			

            <form method="post" action="../../controllers/retailerControllers/transportcheck.php">
				<table border="1px" align="center" width="10%" id="userTable">
					<tr>
						<td>Retailer name</td>
						<td><input type="name" name="retailer_name" value="<?=$user['name']?>"></td>
					</tr>
					<tr>
						<td>Retailer username</td>
						<td><input type="name" name="retailer_username" value="<?=$user['username']?>"></td>
					</tr>
					<tr>
						<td>From</td>
						<td><input type="text" name="froms"></td>
					</tr>
					<tr>
						<td>To</td>
						<td><input type="text" name="too"></td>
					</tr>
					<tr>
						<td>Product name</td>
						<td><input type="text" name="product_name"></td>
					</tr>
					<tr>
						<td>Weight</td>
						<td><input type="text" name="weight"></td>
					</tr>
					<tr>
						<td>date</td>
						<td><input type="date" name="date"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Apply"></td>
					</tr>
				</table>
			</form>
<!-- <table width="100%"; border="1px">
	
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
		<td valign="top"; align="center">
			<h1><u>Transport History</u></h1><hr> 
			<table width="100%"; border="1px">
				<tr>
					<th>Retailer Name</th>
					<th>username</th>
					<th>From</th>
					<th>To</th>
					<th>Product name</th>
					<th>Wieght</th>
					<th>date</th>
					<th>Status</th>
				</tr>
				<?php
				if ($usertransport!=null) {
					foreach($usertransport as $usertransport)
					{

					?>
				<form>
					<tr>
					<td><input type="name" name="retailer_name" value="<?=$usertransport[0]?>" readonly="readonly"></td></td>
					<td><input type="name" name="retailer_username" value="<?=$usertransport[1]?>" readonly="readonly"></td>
					<td><input type="text" name="froms" value="<?=$usertransport[2]?>"></td>
					<td><input type="text" name="too" value="<?=$usertransport[3]?>"></td>
					<td><input type="text" name="product_name" value="<?=$usertransport[4]?>"></td>
					<td><input type="text" name="weight" value="<?=$usertransport[5]?>"></td>
					<td><input type="date" name="date" value="<?=$usertransport[6]?>"></td>
					<td><input type="submit" name="submit" value="Cencel"></td>
					
				</tr>


				</form>
				<?php
			}
		}
		?>
				

				
			</table>
			<br>
			<h1>Apply for transport</h1>
			<form method="post" action="../../controllers/retailerControllers/transportcheck.php">
				<table>
					<tr>
						<td>Retailer name</td>
						<td><input type="name" name="retailer_name" value="<?=$user['name']?>"></td>
					</tr>
					<tr>
						<td>Retailer username</td>
						<td><input type="name" name="retailer_username" value="<?=$user['username']?>"></td>
					</tr>
					<tr>
						<td>From</td>
						<td><input type="text" name="froms"></td>
					</tr>
					<tr>
						<td>To</td>
						<td><input type="text" name="too"></td>
					</tr>
					<tr>
						<td>Product name</td>
						<td><input type="text" name="product_name"></td>
					</tr>
					<tr>
						<td>Weight</td>
						<td><input type="text" name="weight"></td>
					</tr>
					<tr>
						<td>date</td>
						<td><input type="date" name="date"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Apply"></td>
					</tr>
				</table>
			</form>
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