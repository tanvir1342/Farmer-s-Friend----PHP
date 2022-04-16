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
						<td><input type="name" id="retailer_name" name="retailer_name" value="<?=$user['name']?>"></td>
					</tr>
					<tr>
						<td>Retailer username</td>
						<td><input type="name" id="username" name="retailer_username" value="<?=$user['username']?>"></td>
					</tr>
					<tr>
						<td>From</td>
						<td><input type="text" id="from" name="froms"></td>
					</tr>
					<tr>
						<td>To</td>
						<td><input type="text" id="to" name="too"></td>
					</tr>
					<tr>
						<td>Product name</td>
						<td><input type="text" id="product_name" name="product_name"></td>
					</tr>
					<tr>
						<td>Weight</td>
						<td><input type="text" id="weight" name="weight"></td>
					</tr>
					<tr>
						<td>date</td>
						<td><input type="date" id="date" name="date"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="button"  value="Apply" onclick="transporthistory()"></td>
					</tr>
				</table>
			</form>

</body>
</html>
<script>
    
function transporthistory(){

let name = document.getElementById('retailer_name'/*id*/).value;
let username = document.getElementById('username').value;
let from = document.getElementById('from').value;
let to = document.getElementById('to').value;
let product_name = document.getElementById('product_name').value;
let weight = document.getElementById('weight').value;
let date = document.getElementById('date').value;

var dataString = 'username1=' + username + '&name1=' + name + '&from1=' + from + '&to1=' + to + '&product_name1=' + product_name + '&weight1=' + weight + '&date1=' + date ; /*array*/
console.log(dataString);
if (name == '' || username == ''|| from == '' || to == ''|| product_name == ''|| weight == ''|| date == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.\

let http = new XMLHttpRequest();
http.open('POST', '../../controllers/retailerControllers/transportcheck.php', true);
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
