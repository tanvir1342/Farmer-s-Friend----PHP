<?php 
    require('header.php');
    require('../../models/Retailer_info.php');
    require('../../models/marketPrice.php');
    $username = $_SESSION['Retailer_username'];
    $user = getoneuser($username);
    $pricelist = getIN($username);
    //print_r($pricelist);
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
        
           <span align = center>Price</span>
            <table border="1px" align="center" width="10%" id="userTable">
                 <tr>
                    <th>Retailer Name</th>
                    <th>username</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Status</th>    
                </tr>
                <?php

                    if ($pricelist!=null) {
                        foreach($pricelist as $pricelist)
                    {
                ?>
                <form method="POST" action="../../controllers/retailerControllers/updatefilechechk.php?prn=<?=$pricelist['2']?>">
                    <tr>
                    <td><input type="name" name="retailer_name" value="<?=$pricelist['0']?>" readonly="readonly"></td>
                    <td><input type="name" name="retailer_username" value="<?=$pricelist['1']?>" readonly="readonly"></td>
                    <td><input type="name" name="product_name" value="<?=$pricelist['2']?>"></td>
                    <td><input type="name" name="price" value="<?=$pricelist['3']?>"></td>
                    <td><input type="submit" name="submit" value="update"></td>
                </tr>
                </form>
                <?php
            }
        }?>
                
                   
            </table><br>
            <span align = center>Apply for transport</span>
            <table border="1px" align="center" width="10%" id="userTable">
                <form method="POST" action="../../controllers/retailerControllers/insertprice.php">
                
                    <tr>
                        <td>Retailer name:</td>
                        <td><input type="name" id="retailer_name" name="retailer_name" value="<?=$user['name']?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>Retailer username:</td>
                        <td><input type="name" id="username" name="retailer_username" value="<?=$user['username']?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>Product name:</td>
                        <td><input type="name" id="product_name" name="product_name" value=""></td>
                    </tr>
                    <tr>
                        <td>Price:</td>
                        <td><input type="name" id="price" name="price" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" onclick="updateprice()" value="insert"></td>
                    </tr>
               
            </form>
            </table>
</div>
</body>
</html>

<script>
    
function updateprice(){

let name = document.getElementById('retailer_name'/*id*/).value;
let username = document.getElementById('username').value;

let product_name = document.getElementById('product_name').value;
let price = document.getElementById('price').value;


var dataString = 'username1=' + username + '&name1=' + name + '&product_name1=' + product_name + '&price1=' + price  ; /*array*/
console.log(dataString);
if (name == '' || username == ''||  product_name == ''||  price == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.\

let http = new XMLHttpRequest();
http.open('POST', '../../controllers/retailerControllers/insertprice.php', true);
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
<!-- Table Creation -->
<!-- <table width = 100%; border = 1px>
    <tr  height = 100px style ="background-color:#C1BCBC ">
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
            <h1 align="center"> Post Latest Prices </h1> <hr>

            <table width="100%"; border="1px">
                <tr>
                    <th>Retailer Name</th>
                    <th>username</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Status</th>    
                </tr>
                <?php

                    if ($pricelist!=null) {
                        foreach($pricelist as $pricelist)
                    {
                ?>
                <form method="POST" action="../../controllers/retailerControllers/updatefilechechk.php?prn=<?=$pricelist['2']?>">
                    <tr>
                    <td><input type="name" name="retailer_name" value="<?=$pricelist['0']?>" readonly="readonly"></td>
                    <td><input type="name" name="retailer_username" value="<?=$pricelist['1']?>" readonly="readonly"></td>
                    <td><input type="name" name="product_name" value="<?=$pricelist['2']?>"></td>
                    <td><input type="name" name="price" value="<?=$pricelist['3']?>"></td>
                    <td><input type="submit" name="submit" value="update"></td>
                </tr>
                </form>
                <?php
            }
        }?>
                
                   
            </table>
            <br>
            <h2 align="center">Insert new Data</h2>
            <form method="POST" action="../../controllers/retailerControllers/insertprice.php">
                <table align="center">
                    <tr>
                        <td>Retailer name:</td>
                        <td><input type="name" name="retailer_name" value="<?=$user['name']?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>Retailer username:</td>
                        <td><input type="name" name="retailer_username" value="<?=$user['username']?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>Product name:</td>
                        <td><input type="name" name="product_name" value=""></td>
                    </tr>
                    <tr>
                        <td>Price:</td>
                        <td><input type="name" name="price" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="insert"></td>
                    </tr>
                </table>
            </form>
        </td>
         

   <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights Reserve by Gallant ltd.
        </td>
    </tr> -->

<!-- </table>
</html> -->