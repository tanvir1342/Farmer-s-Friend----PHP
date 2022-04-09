<?php
$msg = "";
if(isset($_GET['msg']))
{
    if($_GET['msg'] == "success")
    {
        $msg = "Registration successfull";
    }
    if($_GET['msg'] == "error")
    {
        $msg = "Invalid Username or Password";
    }
}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farmer Login</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="farmerHomes.css">
<link rel="stylesheet" type="text/css" href="farmerLogin.css">
<!--  menubar start from here -->

    <div class="menubar">
        <div class="menubar-icon">
            <img src="images/logo.png">
        </div>
        <div class="menubar-link">
            <td><a href="../../index.php">Home |</a></td>
            <td><a href="#"> About us  |</a></td>
            <td><a href="../../controllers/farmerControllers/logout.php"> logout</a></td>
        </div>
        
    </div>

  <!--   Main area -->
  <div class="main_area_login">

      <div class="login_area_pic">
        <div class="image_login">
            <img src="images/farmerloginimage.jpg">
            <p>Farming is the Profession of Hope</p>
        </div>
          
      </div>
      <div class="login_area_text">
        <h1>Farmer Login</h1>
        <!-- <h2 align = center><?=$msg?></h2> -->
            <form method="POST" action="../../controllers/farmerControllers/logincheck.php" class="login_table">
              <table align="center">
                <tr>
                    <td><input class="input" type="username" name="username" placeholder="Enter your Username"></td>
                </tr>
                <tr>
                    <td><input class="input" type="password" name="password" placeholder="Enter your Password"></td>
                </tr>
            </table> 
            <input  class="submit_button" type="submit" name="submit" value="Login"> 
        </form>
            
      </div>
  </div>

</body>
</html>

































<!-- 
<!DOCTYPE html>
<html>

<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
           
                <tr style ="font-size:20px;">
                    <td><a href="../../index.php">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../controllers/farmerControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr  height = 700px>

        <td colspan="3" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Login Form</h1><hr>
            <h1 align = center><?=$msg?></h1>
        <form method="POST" action="../../controllers/farmerControllers/logincheck.php">
              <table align="center">
                <tr>
                    <td>Username: </td>
                    <td><input type="username" name="username" placeholder="Enter your Username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="Enter your Password"></td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Login"></td>
                 
                </tr>
            </table>  
        </form>
            
            


        </td>
    </tr>

    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           coppyright @2022
        </td>
    </tr>
</table>





</html> -->