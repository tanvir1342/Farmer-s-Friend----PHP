<?php 
    require('header.php');
    require('../../../models/Executive_info.php');
    $username = $_SESSION['Executive_username'];
    $user = getuserinfo($username);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of user</title>
    <link rel="stylesheet" type="text/css" href="Home.css">
    <link rel="stylesheet" type="text/css" href="createUser.css">  
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
        <h2 class="daynamic_area_heading_text">Edit Account</h2><hr>
    <form name="validationn" method="POST" action="../../controllers/adminControllers/excecutiveControllers/executiveUpdateCheck.php">
               <table align="center" style="font-size:20px;" class="create_user">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input class="input" type="name" name="Name" value=""></td>
                        <td>Username:</td>
                        <td><input class="input" type="username" name="username" value=""></td>
                        <td></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Password:</td>
                    <td width="300px "><input class="input" id="password1" type="password" name="password" value=""></td>
                        <td>Email:</td>
                        <td><input class="input" type="email" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td width="300px "><input class="input" type="radio" name="gender" value="" > Male 
                        <input class="input" type="radio" name="gender" value="female" > Female <input class="input" type="radio" name="gender" > Other </td>
                        <td>Age:</td>
                        <td><input class="input" type="number" name="age" value=""></td> 
                    </tr>
                    <br>
                    <tr>
                        <td>Salary:</td>
                        <td><input class="input" type="number" name="salary" value=""></td>               
                    </tr>
                    <br>
                    <tr>

                        <td>Joining Date</td>
                        <td><input class="input" type="datetime" id="password2" name="joining_date" value="">
                        </td>
                    </tr> 
                    
                   
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  
                                </td>
                            </tr>
                  
                

                </table>
                        <td><input class="submit_button" id="submited" type="submit" name="submit" value="Update"></td>  
                    
            </form>
</div>
