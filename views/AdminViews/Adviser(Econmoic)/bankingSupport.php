<?php 
    require('header.php');
    $msg = "";
    if (isset($_GET['msg'])) {

        if ($_GET['msg'] == 'done') {
                $msg = "approved";
        }
    }
?>
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
                    <td><a href="../../../controllers/adminControllers/adviserControllers(eco)/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
       <td width =10% bgcolor="C1BCBC" align="center" style="font-size:20px">
            <a href="AddviserHome(eco).php">Home</a>
            <a href="Post.php">Post</a><br><br>
            <a href="CostingGuidline.php">Make guidline</a><br><br>
            <a href="bankingSupport.php">Banking support</a><br><br>
            <a href="ApplyForLeave.php">Apply for leave</a><br>
       </td>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center><?=$msg?></h1>
            <h1 align = center>Banking Support</h1><hr>
            <table border="1px" align="center" width="98%">
            	<tr>
            		<td>Farmer name</td>
            		<td>username</td>
            		<td>Land Property status</td>
            		<td>Yearly Income</td>
            		<td align="center">Resone for Loan</td>
            		<td>Amount of loan</td>
            		<td>Officials permit</td>
            	</tr>
            	
                <form method="POST" action="../../../controllers/adminControllers/adviserControllers(eco)/bank_supportcheck.php">
                    <tr>
                    <td><input width="10px" type="name" name="name" value="Safi sikdar"></td>
                    <td><input type="username" name="username" value="Safi125"></td>
                    <td><input type="text" name="land_Property_status" value="S66 Kata"></td>
                    <td><input type="text" name="yearly_income" value="7 lack"></td>
                    <td><input type="text" name="Amount_of_loan" value="2 lack"></td>
                    <td><textarea id ="guide" name="reason" rows="5" cols="20" >
                        Pellentesque habitant morbi tristique senectus et netus et malesuada 
                        fames ac turpis egestas. Sed non enim non nulla scelerisque tristique
        
                    </textarea><br></td>
                    <td><input type="submit" name="submit" value="approve"></td>
                </tr>
                </form>
            	
            </table>
            
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