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
 <!-- Dashboard of Retailer -->
    <tr height="700px">

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
            <h1 align="center"> Create Account </h1> <hr>
            <table border="1" align="center">
        <tr align="center" height="100px">
            <th colspan="2" width="400px">
                Fill Up Your Details
            </th>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value=""></td>
        </tr>
         <tr>
            <td>ID</td>
            <td><input type="number" name="number" value=""></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" value="">
            </td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>
                <input type="phone" name="phone" value="">
            </td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>
                <input type="file" name="">
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gen" > Male
                <input type="radio" name="gen" > Female
                <input type="radio" name="gen" > Other
            </td>
        </tr> 
        <tr>
            <td>Trade License Number</td>
            <td>
                <input type="number" name="licnumber" value="">
            </td>
        </tr>


        <tr>
            <td>Trade License Copy</td>
            <td>
                <input type="file" name="">
            </td>
        </tr>        
        <tr height ="20">
            <td colspan="2"></td>
        </tr>   
        <tr height ="20" align="right">
            <td colspan="2"><input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Reset"></td>
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