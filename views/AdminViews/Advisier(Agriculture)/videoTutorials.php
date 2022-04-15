<?php 
    require('header.php');
    $username = $_SESSION['adviser_agri_username'];
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video Tutorials </title>
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
          <h2 class="daynamic_area_heading_text">Video Tutorials</h2><hr>


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
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
           <img src="proPic.jpg" width="150px" height="100px"><br>
           <h2>Tanvir Mahmud</h2><br>
           <p>Adviser(Economics)</p>
           <p>age:25</p>
           <p>gender:male</p>
           <a href="EditProfile.php">Edit profile</a>
       </td>
        </td>
        
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>welcome,name</h1><hr>
            
        </td>
    </tr>
    
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           coppyright @2022
        </td>
    </tr>
</table>


</html> -->