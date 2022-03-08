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
             <a href="ReadFarmer`sPost.php">Read Farmer`s Post |</a><br><br>
            <a href="SolveProblems.php">  Solve Problems |</a><br><br>
            <a href="GuideFarmers.php">  Guide Farmers |</a><br><br>
            <a href="UploadContents.php">  Upload Machinaries Contents</a><br><br>
        </td>
        <!-- Output -->
        <td valign="top">
            <h1 align="center">Welcome To Problems</h1> <hr>
            <input type="radio" id="Plantation" name="Farmer_type1" value="plantation">
            <label for="Plantation">Plantation</label>
            <input type="radio" id="Husbandary" name="Farmer_type2" value="husbandary">
            <label for="Husbandary">Husbandary</label>
            <input type="radio" id="Fisheries" name="Farmer_type3" value="fisheries">
            <label for="Fisheries">Fisheries</label><br>
            
            <h3>Farmer's Name : Brownies</h3>
            <p>This is some text in a paragraph.</p>
            <textarea id ="solve" name="solveProblem" rows="12" cols="180"></textarea><br>
            <a href="#">  Send To Farmer |</a>
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