<?php 
    require('header.php');
    $username = $_SESSION['Blogger_username'];
    require('../../models/Blogger_info.php');
    $user = getoneuser($username);
    
    
    
    //echo $user['Name'];




?>
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
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
           <img src="proPic.jpg" width="150px" height="100px"><br>
           <h2></h2><br>
           <p><?=$user['Name']?></p>
           <p><?=$user['gender']?></p>
           <p><?=$user['age']?></p>
           <a href="EditProfile.php">Edit profile</a>
       </td>
        </td>
      
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">
            <h1 align = center>welcome,<?=$user['Name']?></h1><hr>
            <table  align="center" width="500px" >
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="listOfuser.php">user account</a></td>
                    <td><td>
                </tr>
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="controlDeaL.php">control deal</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="approvePost.php">approve post</a></td>
                </tr>
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="EditProfile.php">Edit profile</a></td>
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
   <!--  menubar start from here -->

    <div class="menubar">
        <div class="menubar-icon">
            <img src="logo.png">
        </div>
        <div class="menubar-link">
            <a href="Login.php">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../controllers/bloggerControllers/logout.php"> Logout </a>
        </div>
        
    </div>

   <!--  main panel -->
    <div class="main_panle">
       <!--  side panel div start from here -->
       <div class="side_panel">
        <div class="pro-pic-of-side-panel">
        
            <img style="width:200px;height:200px;border-radius: 100% ;" src="../../models/bloggerupload/<?=$user['photo']?>">

        </div>
        <div align="center" class="text_area_of_side_panel">
             <h3><?=$user['name']?></h3>             
             <p>Gender:<?=$user['gender']?></p>

        </div>
             <div class="button_area_of_side_panel">

            <button><a href="EditProfile.php"></a>Edit Profile</button>

        </div>
       </div>
      <!--  main panel daynamic area star from here -->
      <div class="daynamic_area">
        <h2 class="daynamic_area_heading_text">Welcome Blogger,<?=$user['name']?></h2><hr>
            <div class="function_area" onclick="location.href='WritePost.php';">
                <img src="writepost.jpg">
                <p>Write a Post</p>
           </div>
        
          <div class="function_area" onclick="location.href='ReadPost.php';">
              <img src="readpost.png">
                <p>Read Posts</p>
          </div><br>

          <div class="function_area" onclick="location.href='PublishResearchPaper.php';">
              <img src="researchpaper.png">
                <p>Research Paper</p>
          </div>

          <div class="function_area" onclick="location.href='EditAccount.php';">
              <img src="editprofile.png">
                <p>Edit Profile</p>
          </div>

              
          </div>

        
    </div>

</body>
</html>