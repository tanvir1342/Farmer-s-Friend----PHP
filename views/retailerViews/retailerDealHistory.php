<?php 
    require('header.php');
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
			<h1><u>Deal History</u></h1><hr> 
			<table width="100%"; border="1px">
				<tr>
					<th>Name</th>
					<th>From</th>
					<th>To</th>
					<th>Name Of Product</th>
					<th>Status</th>
					<th>Request</th>
					
				</tr>
				<tr align="center">
					<td>Tamal</td>
					<td>Dhaka</td>
					<td>Rangpur</td>
					<td>Dhan er Bosta</td>
					<td>Running</td>
					<td><a href="retailerDealHistoryCancelation.php">Cancel</a></td>
					
				</tr >
				<tr align="center">
					<td>Tamal</td>
					<td>Dhaka</td>
					<td>Rangpur</td>
					<td>Dhan er Bosta</td>
					<td>Running</td>
					<td><a href="retailerDealHistoryCancelation.php">Cancel</a></td>
					
				</tr>
				<tr align="center">
					<td>Tamal</td>
					<td>Dhaka</td>
					<td>Rangpur</td>
					<td>Dhan er Bosta</td>
					<td>Running</td>
					<td><a href="retailerDealHistoryCancelation.php">Cancel</a></td>
					
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
</body>
</html>