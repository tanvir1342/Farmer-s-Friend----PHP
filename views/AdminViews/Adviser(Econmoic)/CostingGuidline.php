<?php 
    require('header.php');
    $msg = "";
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == "done") {
            $msg = "posted";
        }
        
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Costing Guideline</title>
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

        <h2 class="daynamic_area_heading_text">Write Guideline About Costing Side</h2><hr>
    <form method="POST" action="../../controllers/adminControllers/adviserControllers(eco)/postchechk.php">
                        <table align="center" style="font-size:20px;" class="create_user">

                             <tr>
                                    <td><h3>Adviser Name : Tanvir</h3></td>
                            </tr>
                            <tr>
                                    <td><textarea class="input" name="problem" rows="10" cols="100"></textarea></td>
                             </tr>

                            <tr >
                                <td >

                                     <br><input class="submit_button"type="submit" name="submit" value="Post">
                                </td>
                            </tr>
                        </table>
            </form>


    </div>









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
            <h1 align = center>write guidline about Costing side</h1><hr>
            <h3>Adviser Name : Tanvir</h3>
            <form method="POST" action="../../../controllers/adminControllers/adviserControllers(eco)/postchechk.php">
                 <textarea id ="guide" name="guide" rows="12" cols="180"></textarea><br>
                 <input type="submit" name="submit" value="Post this problem">
            </form>
            
            <a href="#">  Cancel</a>

        </td>
    </tr>
  
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           coppyright @2022
        </td>
    </tr>
</table>


</html> -->