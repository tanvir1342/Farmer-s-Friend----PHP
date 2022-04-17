<?php 
    require('header.php');
    require('../../../models/Executive_info.php');
    $username = $_SESSION['Executive_username'];
    $user = getuserinfo($username);
    
    //echo $user['Name'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="Home.css">
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
        <div class="pro-pic-of-side-panel">
            
        </div>
        <div class="text_area_of_side_panel">
             <h1><?=$user['Name']?></h1>
             <p>Age:<?=$user['age']?></p>
             <p>Gender:<?=$user['gender']?></p>

        </div>
             <div class="button_area_of_side_panel">
            <button onclick="location.href='executiveEditAccount.php';">Edit Profile</button>   

        </div>
       </div>
      <!--  main panel daynamic area star from here -->
      <div class="daynamic_area">
        <h2 class="daynamic_area_heading_text">Welcome Executive,<?=$user['Name']?></h2><hr>
            <div class="function_area" onclick="location.href='listOfuser.php';">
                <img src="image/user.png">
                <p>User Info</p>
           </div>
        
          <div class="function_area" onclick="location.href='controlDeaL.php';">
              <img src="image/control.png">
                <p>Control Deal</p>
          </div>

          <div class="function_area" onclick="location.href='approvePost.php';">
              <img src="image/aprove.png">
                <p>Post Check</p>
          </div>
          <!-- <br>
          <div class="function_area" onclick="location.href='BloggerPostForAll.php';">
              <img src="image/aprove.png">
                <p>Blogger Post</p>
          </div> -->

              
          </div>

        
    </div>

</body>
</html>