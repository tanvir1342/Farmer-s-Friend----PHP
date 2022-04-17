<?php 
    require('header.php');
    require('../../../models/adviser(agri)_info.php');
    $username = $_SESSION['adviser_agri_username'];
    $user = getuserinfo($username);
        $msg ="";
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == "applied") {
            $msg = "Appplied successfully";
        
    }
    }
?>  


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apply For Leave</title>
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
            <a href="AddviserHome(agri).php">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../../controllers/adminControllers/adviserControllers(agri) /logout.php"> Logout </a>
        </div>
        
    </div>

       <!--  main panel -->
    <div height="100%" class="main_panle">
       <!--  side panel div start from here -->
       <div  class="side_panel">      
        
            <div class="button_area_of_2nd_side_panel">
            <button onclick="location.href='Post.php';">Post</button>
            <button onclick="location.href='GuideFarmers.php';">Make Guideline</button>
            <button onclick="location.href='UploadTutorials.php';">Upload Tutorial</button>
            <button onclick="location.href='ApplyForLeave.php';">Apply For Leave</button>
      


        </div>
    </div>

    <!-- feature page -->

    <div class="daynamic_area">

        <h2 class="daynamic_area_heading_text">Apply For Leave</h2><hr>
    <form method="POST" action="../../controllers/adminControllers/adviserControllers(agri)/Applyleave.php">
        <table border="1px" align="center"class="create_user">
                <tr>
                    <th>Name</td>
                    <th>Username</th>
                    <th>Reason For Leave</th>
                    <th>Leaving Date</th>
                    <th>Joining Date</th>
                    <th>Total Days</th>

                </tr>
                <tr>
                    <td><input class="input" type="name" name="name" value="<?=$user['Name']?>"></td>
                    <td><input class="input" type="username" name="username" value="<?=$user['username']?>"></td>
                    <td><input class="input" type="text" name="reasoneForLeave"></td>
                    <td><input class="input" type="date" name="Form"></td>
                    <td><input class="input" type="date" name="to"></td>
                    <td><input class="input" type="number" name="totalDays"></td>              
             
                    <td><input class="submit_button" type="submit" name="submit" value="Apply"></td>
                </tr>
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
                    <td><a href="../../../controllers/adminControllers/adviserControllers(agri)/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
   
    <tr  height = 700px>
        <td width =10% bgcolor="C1BCBC" align="center" style="font-size:20px">
            <a href="AddviserHome(eco).php">Home</a>
            <a href="Post.php">Post</a><br><br>
            <a href="GuideFarmers.php">Make guidline</a><br><br>
            <a href="UploadTutorials.php">Upload Tutorials</a><br><br>
            <a href="ApplyForLeave.php">Apply for leave</a><br>
       </td>
        </td>
     
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Apply for Leave</h1><hr>
            <form method="post" action="../../../controllers/adminControllers/adviserControllers(agri)/Applyleave.php">
                <table border="1px" align="center">
                <tr>
                    <td>name</td>
                    <td>Username</td>
                    <td>Reasone for Leave</td>
                    <td>Leaving Date</td>
                    <td>Joining Date</td>
                    <td>Total Days</td>

                </tr>
                <tr>
                    <td><input type="name" name="name" value="<?=$user['Name']?>"></td>
                    <td><input type="username" name="username" value="<?=$user['username']?>"></td>
                    <td><input type="text" name="reasoneForLeave"></td>
                    <td><input type="date" name="Form"></td>
                    <td><input type="date" name="to"></td>
                    <td><input type="number" name="totalDays"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Apply"></td>
                </tr>
            </table>
                
            </form>

        </td>
    </tr>
   
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           coppyright @2022
        </td>
    </tr>
</table>


</html> -->