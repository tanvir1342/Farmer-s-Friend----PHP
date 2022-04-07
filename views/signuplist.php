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
            <a href="views/index.php">Home |</a>
            <a href="views/loginList.php"> Login |</a>
            <a href="views/signuplist.php"> signup |</a>
            <a href=""> Logout </a>
        </div>
        
    </div>
<div class="mainpart" align="center">
    <input class="dashboard_button" type="button" onclick="location.href='farmerViews/farmerCreateAccount.php';" value="Farmer">
    <input class="dashboard_button" type="button" onclick="location.href='retailerViews/retailerCreateAccount.php';" value="Retailer">
    <br>
    <input class="dashboard_button" type="button" onclick="location.href='bloogerViews/CreateAccount.php';" value="Blooger">
</div>
</html> 