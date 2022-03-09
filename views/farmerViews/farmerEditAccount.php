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
            <h1 align="center"> Edit Your Account </h1> <hr>
            <table border="1" align="center">
        <tr align="center" height="100px">
            <th colspan="2" width="400px">
                Update Your Details (I Know it looks odd)
            </th>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" value="">
            </td>
        </tr><tr>
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
            <td>DATE OF BIRTH</td>
            <td>
                <input type="date" name="dob" > 
            </td>
        </tr>
        <tr>
            <td>Blood Group</td>
            <td>
                <select>
                    <option>O+</option>
                    <option>O-</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>B+</option>
                    <option>B-</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Farming Type</td>
            <td>
                <select>
                    <option>Agriculture</option>
                    <option>Husbandary</option>
                    <option>Fisheries</option>                    
                </select>
            </td>
        </tr>
        
        <tr height ="20">
            <td colspan="2"></td>
        </tr>
        <tr align="left">
            <td >
                <input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Reset">
            </td>
        </tr>

    </table>
             
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