<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
  
    <link rel="stylesheet" type="text/css" href="../homestyle.css">
</head>
<body>
    <div class="menubar">
        <div class="menubar-icon">
            <img src="logo.png">
        </div>
        <div class="menubar-link">
            <a href="">Home |</a>
            <a href="views/loginList.php"> Login |</a>
            <a href="views/signuplist.php"> signup |</a>
            <a href=""> Logout </a>
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