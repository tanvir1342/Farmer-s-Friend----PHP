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
                    <td><a href="../../controllers/retailerControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    
    <tr  height = 700px>
        
        <td colspan="3" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Login Form</h1><hr>
        <form method="POST" action="../../controllers/retailerControllers/logincheck.php">
              <table align="center">
                <tr>
                    <td>Username: </td>
                    <td><input type="username" name="username" placeholder="Enter your Username" required></td>
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
<a href="../../../models/home.html">clicl</a>




</html> -->
<?php
    $error = "";

    if(isset($_GET['msg']))
    {
        if($_GET['msg']  == 'error'){
            $error = "invaild username or password";
        }
        
    }


?>
<!DOCTYPE html>
<html>
<head
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="stylesheet" type="text/css" href="Login.css">
<link rel="stylesheet" type="text/css" href="createUser.css">
<!--  menubar start from here -->

    <div class="menubar">
        <div class="menubar-icon">
            <img src="image/logo.png">
        </div>
        <div class="menubar-link">
            <a href="http://localhost/Project_of_webtech_section_K_2022/">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us</a>
        </div>
        
    </div>

  <!--   Main area -->
  <div class="main_area_login">

      <div class="login_area_pic">
        <div class="image_login">
            <img src="image/login.png">
            <p>RETAll ls SElllNG THINGS
THAT DON'T COME BACK
TO CUSTOMERS WHO DO
</p>
        </div>
          
      </div>
      <div class="login_area_text">
        <h1>Retailer Login</h1>
            <form method="POST" action="../../controllers/retailerControllers/logincheck.php" class="login_table">
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