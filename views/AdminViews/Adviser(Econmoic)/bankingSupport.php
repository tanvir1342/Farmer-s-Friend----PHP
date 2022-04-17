<?php 
    require('header.php');
    require('../../../models/bank_support_database.php');
    $msg = "";
    if (isset($_GET['msg'])) {

        if ($_GET['msg'] == 'done') {
                $msg = "approved";
        }
    }
    $list = gettlist();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banking Guideline</title>
    <link rel="stylesheet" type="text/css" href="Home.css">
    <link rel="stylesheet" type="text/css" href="createUser.css">
    <style>
    .button_area_of_2nd_side_panel{
        color: white;
        align-items: center;
        position: absolute;
        margin-left:25px;
        margin-top: 30px;
    }
    .button_area_of_2nd_side_panel button{
        width: 200px;
        height: 30px;
        font-size: 16px;
        margin: 10px;

    }
    .function_area{
        margin-left:250px;
    }
    </style>
</head>
<body>
       <!--  menubar start from here -->

    <div class="menubar">
        <div class="menubar-icon">
            <img src="image/logo.png">
        </div>
        <div class="menubar-link">
            <a href="AddviserHome(eco).php">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../../controllers/adminControllers/adviserControllers(eco)/logout.php"> Logout </a>
        </div>
        
    </div>

       <!--  main panel -->
    <div height="100%" class="main_panle">
       <!--  side panel div start from here -->
       <div  class="side_panel">      
        
            <div class="button_area_of_2nd_side_panel">
            <button onclick="location.href='Post.php';">Post</button>
            <button onclick="location.href='CostingGuidline.php';">Make Guideline</button>
            <button onclick="location.href='bankingSupport.php';">Banking Support</button>
            <button onclick="location.href='ApplyForLeave.php';">Apply For Leave</button>
      


        </div>
    </div>

    <!-- feature page -->

    <div class="daynamic_area">

        <h2 class="daynamic_area_heading_text">Banking Guideline</h2><hr>
    <form method="POST" action="../../controllers/adminControllers/adviserControllers(eco)/bank_supportcheck.php">
                <table border="1px" align="center" width="98%"  class="create_user">
                <tr>
                    <th>Farmer name</th>
                    <th>Username</th>
                    <th>Land Property status</th>
                    <th>Yearly Income</th>
                    <th align="center">yearly income</th>
                    <th>Reason for Loan</th>
                    <th>Approve</th>
                </tr>
                <?php
                if($list!=null){
                    foreach($list as $list)
                    {


                ?>
                

                    <tr>
                    <td><input class="input" width="10px" type="name" name="name" value="<?=$list[0]?>"></td>
                    <td><input class="input" type="username" name="username" value="<?=$list[1]?>"></td>
                    <td><input class="input" type="text" name="land_Property_status" value="<?=$list[2]?>"></td>
                    <td><input class="input" type="text" name="yearly_income" value="<?=$list[3]?>"></td>
                    <td><input class="input" type="text" name="Amount_of_loan" value="<?=$list[3]?>"></td>
                    <td><textarea   name="reason" rows="5" cols="20">
                        <?=$list[5]?>
        
                    </textarea><br></td>
                    <td><input class="submit_button" type="submit" name="submit" value="Approve"></td>
                </tr>
                <?php


            }
        }?>
        
                
            </table>
        </form>


























<!-- <!DOCTYPE html>
<html>

<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
                
                <tr style ="font-size:20px;">
                    <td><a href="#">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../../controllers/adminControllers/adviserControllers(eco)/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
  
    <tr  height = 700px>
       <td width =10% bgcolor="C1BCBC" align="center" style="font-size:20px">
            <a href="AddviserHome(eco).php">Home</a>
            <a href="Post.php">Post</a><br><br>
            <a href="CostingGuidline.php">Make guidline</a><br><br>
            <a href="bankingSupport.php">Banking support</a><br><br>
            <a href="ApplyForLeave.php">Apply for leave</a><br>
       </td>
        </td>
        
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
 
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           coppyright @2022
        </td>
    </tr>
</table>


</html> -->