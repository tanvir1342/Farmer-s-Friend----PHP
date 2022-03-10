<!DOCTYPE html>
<html lang="en">

<!-- Table Creation -->
<table width = 100%; border = 1px>
    <tr  height = 100px style ="background-color:#C1BCBC ">
        <td width= 10%; align = center>
            <img width = 100px; height = 100px src = "logo.png">
        </td> 
        <!-- Top Menubar -->
        <td align="right">
            <table>
                <tr>
                    <td><a href="retailerHome.php">Home|</a></td>
                    <td><a href="#">  About US |</a></td>
                    <td><a href="#">  Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
 <!-- Dashboard of Retailer -->
         <td width =15% bgcolor="C1BCBC" valign="top" align="center">
             <a href="retailerEditAccount.php"> Edit Account </a><br><br> 
            <a href="retailerUpdatePrice.php"> Update & Post Latest Prices </a><br><br>
            <a href="dealWithFarmer.php"> Deal With Farmers </a><br><br>
            <a href="retailerTransportHistory.php"> Transport Products </a><br><br>
            <a href="retailerDealHistory.php"> Deal History </a><br><br>
            <a href="govTax.php"> Payment For Tax </a><br><br>
            <a href="makePayment.php"> Payment For Any Issue </a><br><br>           
        </td>
        <!-- Output -->
        <td valign="top">
            <h1 align="center"> Post Latest Prices </h1> <hr>

            <table width="100%"; border="1px">
                <tr>
                    <th>Product Name</th>
                    <th>Previous Price(tk)/kg</th>
                    <th>Latest Price(tk)/kg</th>
                    <th>Status</th>
                    
                    
                </tr>
                <tr align="center">
                    <td>Rice</td>
                    <td>70</td>
                    <td>71</td>
                    <td><a href="#">Update</a></td>
                    
            </table>
        </td>
         
    <!-- Footer Part -->
   <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights Reserve by Gallant ltd.
        </td>
    </tr>

</table>
</html>