<?php 
    require('header.php');
    require('../../../models/adviser(eco)_info.php');
    $username =$_SESSION['adviser_eco_username'];
    $user = getuserinfo($username);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="Home.css">
    <style>
        .pro_pic img{
            border-radius: 100%;
            width: 200px;
            height: 200px;
            align-items: center;
           margin-left: 20px;
           margin-top:10px;
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
    <div class="main_panle">
       <!--  side panel div start from here -->
       <div class="side_panel">
        <div class="pro_pic">
            <img src="<?=$user['photo']?>">
        </div>
        <div class="text_area_of_side_panel">
             <h1><?=$user['Name']?></h1>
             <p>Age:<?=$user['age']?></p>
             <p>Gender:<?=$user['gender']?></p>

        </div>
             <div class="button_area_of_side_panel">
            <button onclick="location.href='EditProfile.php';">Edit Profile</button>   

        </div>
       </div>

<div class="daynamic_area">
        <h2 class="daynamic_area_heading_text">Welcome Adviser (Eco),<?=$user['Name']?></h2><hr>
            <div class="function_area" onclick="location.href='Post.php';">
                <img src="image/post.png">
                <p>Post</p>
           </div>
        
          <div class="function_area" onclick="location.href='CostingGuidline.php';">
              <img src="image/guideline.jpg">
                <p>Make Guideline</p>
          </div>
          <br>

          <div class="function_area" onclick="location.href='bankingSupport.php';">
              <img src="image/banksupport.jpg">
                <p>Banking Support</p>
          </div>
          <div class="function_area" onclick="location.href='ApplyForLeave.php';">
              <img src="image/leave.png">
                <p>Apply For Leave</p>
          </div>

              
          </div>

        
    </div>

</body>
</html>





































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
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
           <img src="proPic.jpg" width="150px" height="100px"><br>
           <h2>Name: <?=$user['Name']?></h2><br>
           <p>Adviser(Economics)</p>
           <p>Age:<?=$user['age']?></p>
           <p>gender: <?=$user['gender']?></p>
           <a href="EditProfile.php">Edit profile</a>
       </td>
        </td>

        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>welcome,<?=$user['Name']?></h1><hr>
            <table  align="center" width="500px" >
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="post.php">Post</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="CostingGuidline.php">Make guidline</a></td>
                </tr>
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="bankingSupport.php">Banking support</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="ApplyForLeave.php">Apply for leave</a></td>
                </tr>
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