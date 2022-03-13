<!DOCTYPE html>
<html>
<!-- center table creation -->
<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
                <!-- center menubar -->
                <tr style ="font-size:20px;">
                    <td><a href="#">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="#"> logout</a></td>
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
        <td valign="top"; ><h1 align="center"><u>Make Payment </u></h1><hr>
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