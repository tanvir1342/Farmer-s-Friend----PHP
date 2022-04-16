<?php 
    require('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Goverment Tax</title>  
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
      

       <div class="main_panle">
        <div class="daynamic_area">
         <span align="center">Government Tax</span><br>
             <form name="validationn" method="POST" action="../../controllers/retailerControllers/govtextchechk.php">
            <table border="1px" align="center" width="10%" id="userTable">
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input type="username" id="username" name="username" value="" placeholder="Enter Username"></td>
                         <td>Payment Method:</td>
                        <td width="300px "><input type="radio" id="payment_method" name="payment_method" value="Bkash" > Bkash <br> 
                            <input type="radio" name="payment_method" value="Dabit" > Dabit <br>
                            <input type="radio" name="payment_method" value="Credit" > Credit <br>
                            <input type="radio" name="payment_method" value="Bank" > Bank </td> <br>
                        
                    </tr>
                    <br>
                    <tr>
                        <td>Phone Number:</td>
                        <td width="300px "><input type="number" id="phone" name="phone" value=""  onblur ="phonevalidation()" placeholder="Enter Phone Number" >
                            
                        </td>
                        <td></td>
                        <td><h3 id="nerror"></h3></td>
                        
                    </tr>

                    <tr>
                        
                        <td>City/District:</td>
                        <td width="300px "><input type="text" id="cityORdistrict" name="cityORdistrict" value="" placeholder="Enter Your City Or District"></td>
                         <td>Pin/Pass:</td>
                        <td width="300px "><input type="number" id="pinORpass" name="pinORpass" value="" placeholder="Enter Your Pin Or Pass"></td>  
                    </tr>
                    <br>
                    <tr>
                        <td>Amount:</td>
                        <td><input type="number" id="amount" name="amount" value=""placeholder="Enter Payment"></td>
                                    
                    </tr>
                    <br>
                   
                    
                   
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  <input type="button" onclick="govtax()" name="submit" value="submit">   
                                  <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                   
                

                </table>
                    
            </form> 
        </div>
           
       </div >

</body>
</html>

<script>
   
   
    function phonevalidation()
    {
        let phonenumber = document.validationn.phone.value;
        var pnumber = /(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/;
        if(phonenumber.match(pnumber))
        {
            document.getElementById('nerror').innerHTML = "";
            
        }
        else{
            document.getElementById('nerror').innerHTML = "Invalid Phone Number";
        }
        
    }

    function govtax(){


let username = document.getElementById('username').value;
let payment_method = document.getElementById('payment_method').value;
let phone = document.getElementById('phone').value;
let cityORdistrict = document.getElementById('cityORdistrict').value;
let pinORpass = document.getElementById('pinORpass').value;
let amount = document.getElementById('amount').value;

var dataString = 'username1=' + username + '&payment_method1=' + payment_method + '&phone1=' + phone + '&cityORdistrict1=' + cityORdistrict + '&pinORpass1=' + pinORpass + '&amount1=' + amount  ; /*array*/
console.log(dataString);
if (username == ''|| payment_method == '' || phone == ''|| cityORdistrict == ''|| pinORpass == ''|| amount == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.\

let http = new XMLHttpRequest();
http.open('POST', '../../controllers/retailerControllers/govtextchechk.php', true);
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