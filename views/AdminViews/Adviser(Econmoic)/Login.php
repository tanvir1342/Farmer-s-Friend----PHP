<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="Home.css">
<link rel="stylesheet" type="text/css" href="Loginad.css">
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
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
        </div>
          
      </div>
      <div class="login_area_text">
        <h1>Adviser Login</h1>
            <form method="POST" action="../../../controllers/adminControllers/adviserControllers(eco)/ecoLogincheck.php" class="login_table">
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

