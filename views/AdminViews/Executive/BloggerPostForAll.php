<?php 
    require('header.php');
    require('../../../models/BloggerPost.php');
    $post = getuser();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>History</title>
    <link rel="stylesheet" type="text/css" href="createUser.css">
    <style>
        .post_area{

        }
        .only_post{

        }
        .name{

        }
    </style>
</head>
<body onload="getdata()">
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

    <div class="post_area">
        <div class="only_post">
            <p class="name">Tanvir Mahmud sarker</p>
        <p>Hello guyz,welcome to my chuking chanel</p>
        <form>
           <input type="text" name="comment">
           <input type="submit" name="submit" value="comment"> 
        </form>
        </div>
        
        
        
        
    </div>
</body>
</html>