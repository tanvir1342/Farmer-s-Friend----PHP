<?php 
    require('header.php');
    require('../../../models/farmer_vet_support.php');
    $user = getallpost();
?>

    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farmer Post</title>
    <link rel="stylesheet" type="text/css" href="createUser.css">
    <link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
    <div class="menubar">
        <div class="menubar-icon">
            <img src="logo.png">
        </div>
        <div class="menubar-link">
            <a href="">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../../controllers/adminControllers/VeterinarianControllers/logout.php"> Logout </a>
        </div>
        
    </div>
    <div class="main_panle">
       <!--  side panel div start from here -->
       <div class="side_panel">
             <div class="button_area_of_2nd_side_panel">
            <button>Edit Profile</button>
            <button>Farmer Post</button>
            <button>History</button>
        


        </div>
       </div>
      <!--  main panel daynamic area star from here -->
        <div class="daynamic_area">
        
           <span>Farmer Posts</span>
            <table border="1px" align="center" width="80%" id="userTable">

                <tr>
                    <th>Username</th>
                    <th>Farmer username</th>
                    <th>Animal type</th>
                    <th>Description</th>
                    <th id="Solve">Solution</th>
                </tr>
                <?php

                if($user!=null){
                foreach ($user as $user) {


                    ?>

                <tr>

                    <td><?=$user['0']?></td>
                    <td><?=$user['1']?></td>
                    <td><?=$user['2']?></td>
                    <td><?=$user['3']?></td>
                    <td align="center" id="Solve"><a href="treatment.php">Treatment</a></td>

                </tr>
                <?php
                    
                }
                }

                ?>
            </table><br>