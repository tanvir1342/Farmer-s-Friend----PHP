<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
  
    <link rel="stylesheet" type="text/css" href="indexpage.css">
</head>
<body>
    <div class="menubar">
        <div class="menubar-icon">
            <img src="logo.png">
        </div>
        <div class="menubar-link">
            <a href="../index.php">Home |</a>
            <a href="loginList.php"> Login |</a>
            <a href="signuplist.php"> Signup</a>
        </div>
        
    </div>
<div class="mainpart" align="center">
    <input class="dashboard_button" type="button" onclick="location.href='AdminViews/Executive/Login.php';" value="Executive">
    <input class="dashboard_button" type="button" onclick="location.href='AdminViews/Adviser(Econmoic)/Login.php';" value="Adviser Economics">
    <input class="dashboard_button" type="button" onclick="location.href='AdminViews/Advisier(Agriculture)/Login.php';" value="Adviser Agriculture"><br>
    <input class="dashboard_button" type="button" onclick="location.href='AdminViews/Veterinarian/Login.php';" value="Veterinarian">
    <input class="dashboard_button" type="button" onclick="location.href='farmerViews/Login.php';" value="Farmer">
    <input class="dashboard_button" type="button" onclick="location.href='retailerViews/Login.php';" value="Retailer">
    <br>
    <input class="dashboard_button" type="button" onclick="location.href='bloogerViews/Login.php';" value="Blogger">
</div>
</html> 