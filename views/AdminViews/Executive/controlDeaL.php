<?php 
    require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of user</title>
    <link rel="stylesheet" type="text/css" href="Home.css">
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
            <a href="ExcutiveHome.php">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../../controllers/adminControllers/excecutiveControllers/logout.php"> Logout </a>
        </div>
        
    </div>
    <!--  main panel -->
    <div class="main_panle">
       <!--  side panel div start from here -->
       <div class="side_panel">
             <div class="button_area_of_2nd_side_panel">
            <button onclick="location.href='executiveEditAccount.php';">Edit Profile</button>
            <button onclick="location.href='listOfuser.php';">User Info</button>
            <button onclick="location.href='controlDeaL.php';">Control Deal</button>
            <button onclick="location.href='approvePost.php';">Post Check</button>


        </div>
       </div>
      <!--  main panel daynamic area star from here -->
      <div class="daynamic_area">
        
            <div class="function_area" onclick="location.href='approveDeal.php';">
                <img src="image/farmer.png">
                <p>Approve deal</p>
           </div>
        
          <div class="function_area" onclick="location.href='HistoryDeal.php';">
              <img src="image/retailer.png">
                <p>History</p>
          </div>
          <br>

          
              
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
                    <td><a href="../../../controllers/adminControllers/excecutiveControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>

    <tr  height = 700px>
        <td width =10%; valign = top; style ="background-color:#C1BCBC; font-size:20px;">
            <a href="listOfuser.php">user Account</a><br><br>
            <a href="verifyDocument.php">verfiy ducument</a><br><br>
            <a href="controlDeaL.php">control deal</a><br><br>
            <a href="approvePost.php">Approve post</a><br><br>
            <a href="EditProfile.php">Edit profile</a><br><br>
        </td>
       
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Control farmer and Retailer Dealing</h1><hr>
            <table  align="center" width="500px" >
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="approveDeal.php">Approve Deal</a></td>
                </tr>
                <tr>
                    <td colspan="2" height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="HistoryDeal.php">History</a></td>
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