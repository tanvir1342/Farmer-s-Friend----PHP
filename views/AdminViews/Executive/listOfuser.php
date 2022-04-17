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
        
            <div class="function_area" onclick="location.href='createFarmer.php';">
                <img src="image/farmer.png">
                <p>Farmer</p>
           </div>
        
          <div class="function_area" onclick="location.href='createRetailer.php';">
              <img src="image/retailer.png">
                <p>Retailer</p>
          </div>
          <br>

          <div class="function_area" onclick="location.href='createAdviser(eco).php';">
              <img src="image/adviser.png">
                <p>Adviser(Economic)</p>
          </div>
           <div class="function_area" onclick="location.href='createAdviser(Agri).php';">
              <img src="image/adviser.png">
                <p>Adviser(Agriculture)</p>
          </div>

              
          </div>

        
    </div>
</body>
</html>

