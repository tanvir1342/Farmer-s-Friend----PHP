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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table width="100%"; border="1px">
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
	 <!-- Footer Part -->
   <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights Reserve by Gallant ltd.
        </td>
    </tr>
</table>
</body>
</html>