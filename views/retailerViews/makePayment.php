<?php 
    require('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Goverment Tax</title>  
</head>
<body>
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
      

       <div class="main_panle">
        <div class="daynamic_area">
         <span align="center">Payment System</span><br>
             <form name="validationn" method="POST" action="../../controllers/retailerControllers/govtextchechk.php">
            <table border="1px" align="center" width="10%" id="userTable">
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input type="username" name="username" value="" placeholder="Enter Username"></td>
                         <td>Payment Method:</td>
                        <td width="300px "><input type="radio" name="payment_method" value="Bkash" > Bkash <br> 
                            <input type="radio" name="payment_method" value="Dabit" > Dabit <br>
                            <input type="radio" name="payment_method" value="Credit" > Credit <br>
                            <input type="radio" name="payment_method" value="Bank" > Bank </td> <br>
                        
                    </tr>
                    <br>
                    <tr>
                        <td>Phone Number:</td>
                        <td width="300px "><input type="number" name="phone" value=""  onblur ="phonevalidation()" placeholder="Enter Phone Number" >
                            
                        </td>
                        <td></td>
                        <td><h3 id="nerror"></h3></td>
                        
                    </tr>

                    <tr>
                        
                        <td>City/District:</td>
                        <td width="300px "><input type="text" name="cityORdistrict" value="" placeholder="Enter Your City Or District"></td>
                         <td>Pin/Pass:</td>
                        <td width="300px "><input type="number" name="pinORpass" value="" placeholder="Enter Your Pin Or Pass"></td>  
                    </tr>
                    <br>
                    <tr>
                        <td>Amount:</td>
                        <td><input type="number" name="amount" value=""placeholder="Enter Payment"></td>
                                    
                    </tr>
                    <br>
                   
                    
                   
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  <input type="submit" name="submit" value="submit">   
                                  <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                   
                

                </table>
                    
            </form> 
        </div>
           
       </div >
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
       <td valign="top">
            <h1 align="center"> Government Tax </h1> <hr>
            <table border="1" align="center">
            <form name="validationn" method="POST" action="../../controllers/retailerControllers/govtextchechk.php">
               <table align="center" style="font-size:20px;">
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input type="username" name="username" value="" placeholder="Enter Username"></td>
                         <td>Payment Method:</td>
                        <td width="300px "><input type="radio" name="payment_method" value="Bkash" > Bkash <br> 
                            <input type="radio" name="payment_method" value="Dabit" > Dabit <br>
                            <input type="radio" name="payment_method" value="Credit" > Credit <br>
                            <input type="radio" name="payment_method" value="Bank" > Bank </td> <br>
                        
                    </tr>
                    <br>
                    <tr>
                        <td>Phone Number:</td>
                        <td width="300px "><input type="number" name="phone" value=""  onblur ="phonevalidation()" placeholder="Enter Phone Number" >
                            
                        </td>
                        <td></td>
                        <td><h3 id="nerror"></h3></td>
                        
                    </tr>

                    <tr>
                        
                        <td>City/District:</td>
                        <td width="300px "><input type="text" name="cityORdistrict" value="" placeholder="Enter Your City Or District"></td>
                         <td>Pin/Pass:</td>
                        <td width="300px "><input type="number" name="pinORpass" value="" placeholder="Enter Your Pin Or Pass"></td>  
                    </tr>
                    <br>
                    <tr>
                        <td>Amount:</td>
                        <td><input type="number" name="amount" value=""placeholder="Enter Payment"></td>
                                    
                    </tr>
                    <br>
                   
                    
                   
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  <input type="submit" name="submit" value="submit">   
                                  <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                   
                

                </table>
                    
            </form> 
        </td>
            
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
</script>