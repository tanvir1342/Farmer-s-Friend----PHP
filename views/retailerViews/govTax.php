<?php 
    require('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<!-- Table Creation -->
<table width = 100%; border = 1px>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width= 10%; align = center>
            <img width = 100px; height = 100px src = "logo.png">
        </td> 
        <!-- Top Menubar -->
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
        <td valign="top"; ><h1 align="center"><u>Government Tax </u></h1><hr>
            <table >
                <tr>
                    <td>Payment Method:</td>
                    <td height="100">
                        
                <select>
                    <option></option>
                    <option>Bkash</option>
                    <option>Dabit</option>
                    <option>Credit</option>
                    <option>Bank</option>
                </select>
            </td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td>
                     <input type="number" name="Phone:">
                    </td>
                </tr>
                <tr>
                    <td>Amount: </td>
                    <td>
                    <input type="number" name="Amount">
                    </td>
                </tr>
                <tr>
                    <td>City/District: </td>
                    <td>
                    <input type="text" name="Amount">
                    </td>
                </tr>
                <tr>
                    <td>ID: </td>
                    <td>
                    <input type="number" name="Amount">
                    </td>
                </tr>
                <tr>
                    <td>Pin/Pass Code: </td>
                    <td>
                    <input type="number" name="number">
                    </td>
                </tr>
                <tr >
                    <td >
                         <br><input type="submit" value="Pay">
                    </td>
                </tr>
            </table>
            
        </td>
    </tr>

    <!-- Footer Part -->
   <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights Reserve by Gallant ltd.
        </td>
    </tr>

</table>
</html>