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
	<span align = center>Directly Deal with Farmers</span>
	<table border="1px" align="center" width="10%" id="userTable">
				<tr align="left">
					<td>
						<img src="image/komi.png" style="width:150px">
						<h1>Komi Chan</h1>
					</td>
				</tr>
				<tr>
					<table border="1px" align="center" width="10%" id="userTable">
							<tr>
								<td>
									 Komi Chan: <textarea name="comment" rows="5" cols="40"></textarea>
								</td>
								<td>
									<h1></h1>
								</td>
							</tr>
							<tr align="left">
								<td>
									<h1></h1>
								</td>
								<td >
									 <textarea name="comment" rows="5" cols="40"></textarea> :Tadano Kun
								</td>
							</tr>
						</table>
				</tr>
			</table>
</div>
<!-- <table width="100%"; border="1px">
<tr height = 100px style ="background-color:#C1BCBC ">
		<td width="10%" align="center">
			<img  width="80px"; height="80px"; src="logo.png";  >
		</td>
		<td align="right">
			<a href="a">Home | </a>
			<a href="a">About Us | </a>
			<a href="a">Log Out</a>
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
		<td valign="top"; align="center"><h1><u>Directly Deal with Farmers</u></h1><hr>
			<table width="100%">
				<tr align="left">
					<td>
						<img src="komi.png" style="width:150px">
						<h1>Name: Komi Chan</h1>
					</td>
				</tr>
				<tr>
					<table>
							<tr>
								<td>
									 Komi Chan: <textarea name="comment" rows="5" cols="40"></textarea>
								</td>
								<td>
									<h1></h1>
								</td>
							</tr>
							<tr align="left">
								<td>
									<h1></h1>
								</td>
								<td >
									 <textarea name="comment" rows="5" cols="40"></textarea> :Tadano Kun
								</td>
							</tr>
						</table>
				</tr>
			</table>

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