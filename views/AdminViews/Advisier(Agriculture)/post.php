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
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <td width =10% bgcolor="C1BCBC" align="center" style="font-size:20px">
            <a href="AddviserHome(eco).php">Home</a>
            <a href="Post.php">Post</a><br><br>
            <a href="GuideFarmers.php">Make guidline</a><br><br>
            <a href="UploadTutorials.php">Upload Tutorials</a><br><br>
            <a href="ApplyForLeave.php">Apply for leave</a><br>
       </td>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Farmer's Posts</h1><hr>
            <input type="radio" id="Plantation" name="Farmer_type1" value="plantation">
            <label for="Plantation">Plantation</label>
            <input type="radio" id="Husbandary" name="Farmer_type2" value="husbandary">
            <label for="Husbandary">Husbandary</label>
            <input type="radio" id="Fisheries" name="Farmer_type3" value="fisheries">
            <label for="Fisheries">Fisheries</label><br>
            
            <h3>Farmer's Name : Brownies</h3>
            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,<br> a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage
            </p>
            <textarea id ="solve" name="solveProblem" rows="12" cols="180"></textarea><br>
            <a href="#">  Mark as spam |</a>
            <a href="#">  Solve problem |</a>
            <a href="#">  Cancel</a>
            <br>
            <h3>Farmer's Name : Brownies</h3>
            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,<br> a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage
            </p>
            <textarea id ="solve" name="solveProblem" rows="12" cols="180"></textarea><br>
            <a href="#">  Mark as spam |</a>
            <a href="#">  Solve problem |</a>
            <a href="#">  Cancel</a>
            <br>


        </td>
    </tr>
    <!-- footer section -->
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           coppyright @2022
        </td>
    </tr>
</table>


</html>