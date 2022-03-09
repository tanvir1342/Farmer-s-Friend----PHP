<!DOCTYPE html>
<html lang="en">

<!-- Table Creation -->
<table width = 100%; border = 1px>
    <tr height = 100px>
        <td width= 10%; align = center>
            <img width = 100px; height = 100px src = "logo.png">
        </td> 
        <!-- Top Menubar -->
        <td align="right">
            <table>
                <tr>
                    <td><a href="farmerHome.php">Home|</a></td>
                    <td><a href="#">  About US |</a></td>
                    <td><a href="#">  Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
 <!-- Dashboard of Farmer -->
    <tr height="700px">

        <td width="10%"; valign="top">
            <a href="farmerEditAccount.php"> Edit Account |</a><br><br> 
            <a href="postProblems.php"> Post For Problem |</a><br><br>
            <a href="#"> Read Machiniaries Guidelines |</a><br><br>
            <a href="#"> Post For Support |</a><br><br>
            <a href="#"> Read Farming Guidelines |</a><br><br>
            <a href="#"> Market Prices |</a><br><br>
            <a href="#"> Check Weather |</a><br><br>
            <a href="#"> Deal With Retailers |</a><br><br>
            <a href="#"> Banking Guidelines |</a><br><br>
            <a href="#"> General Payments |</a><br><br>
            <a href="#"> Water Payments |</a><br>

        </td>
        <!-- Output -->
        <td valign="top">
            <h1 align="center"> Post For Problems </h1> <hr>
            
            <table>
                <tr>
                    <td>Select Type</td>
                         <td>
                                <select>
                                    <option>Agriculture Related</option>
                                    <option>Agriculture Costing Related</option>
                                    <option>Treatment Request</option>
                                </select>
                         </td>
                 </tr>

            </table>

            <h3>Farmer's Name : UngaBunga</h3>
            <textarea id ="guide" name="guide" rows="12" cols="180"></textarea><br>
            
            <a href="#">  Post This Problem|</a>
            <a href="#">  Cancel</a>
             
        </td>
    </tr>
    <!-- Footer Part -->
    <tr height="100px">
        <td colspan="2"; align="center">
            All Copyrights Reserve by Gallant ltd.
        </td>
    </tr>

</table>
</html>