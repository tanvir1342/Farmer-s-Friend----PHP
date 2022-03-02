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
                    <td><a href="adviserAgro.php">Home|</a></td>
                    <td><a href="#">  About US |</a></td>
                    <td><a href="#">  Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
 <!-- Menubar of adviser -->
    <tr height="700px">
        <td width="10%"; valign="top">
             <a href="ReadFarmer`sPost.php">Read Farmer`s Post ||</a><br><br>
            <a href="Problems.php">  Problems ||</a><br><br>
            <a href="GuideFarmers.php">  Guide Farmers ||</a><br><br>
            <a href="UploadContents.php">  Upload Contents ||</a><br><br>
        </td>
        <!-- Output -->
        <td valign="top">
            <!-- Farmers post -->
            <h1 align="center">Welcome To Read Farmer`s Post</h1> <hr>

            <h3>Farmer's Name : Brownies</h3>
            <textarea id ="post" name="farmerpost" rows="12" cols="180"></textarea><br>
            <a href="#">  Mark as Read |</a>
            <a href="#">  Report as Spam |</a>
            <a href="Problems.php">  Solve This Problem</a>

            <h3>Farmer's Name : Daddy Shark</h3>
            <textarea id ="post" name="farmerpost" rows="12" cols="180"></textarea><br>
            <a href="#">  Mark as Read |</a>
            <a href="#">  Report as Spam |</a>
            <a href="Problems.php">  Solve This Problem</a>
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