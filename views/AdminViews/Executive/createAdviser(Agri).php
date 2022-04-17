<?php 
    require('header.php');
    require('../../../models/adviser(agri)_info.php');
    $user = getuser();
    $msg = "";
    if (isset($_GET['msg'])) {
        if($_GET['msg'] == 'done')
        {
            $msg = "created account";
        }
        if($_GET['msg'] == 'failed')
        {
            $msg = "created account failed";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adviser(Economic) user List</title>
    <link rel="stylesheet" type="text/css" href="createUser.css">
</head>
<body>
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
        
           <span align = center>Adviser(Agriculture) user List</span>
            <table border="1px" align="center" width="80%" id="userTable">
                <tr>
                    <th>Name</th>
                    <th>username</th>
                    <th>email</th>
                    <th>gender</td>
                    <th>Age</th>
                    <th>salary</th>
                    <th>joining Date</th>
                    <th>photo</th>
                </tr>
                <?php

                if($user!=null){
                foreach ($user as $user) {


                    ?>

                <tr>
                    <td><?=$user['0']?></td>
                    <td><?=$user['1']?></td>
                    <td><?=$user['3']?></td>
                    <td><?=$user['4']?></td>
                    <td><?=$user['5']?></td>
                    <td><?=$user['6']?></td>
                    <td><?=$user['7']?></td>
                    <td>null</td>
                </tr>
                <?php
                    
                }
                }

                ?>
                
            </table><br>

        
            <h3 align="center"><?=$msg?></h3><br>
            <span align="center">Create new user</span><br>

            <form method="POST" action="../../../controllers/adminControllers/excecutiveControllers/agricreataccount.php">
                <table class="userTable userTable_horizently" align="center">
                    <tr>
                        <td>Name</td>
                        <td><input class="input_horizently" type="name" name="name" value=""></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input class="input_horizently" type="username" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input class="input_horizently" type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input class="input_horizently" type="email" name="email" value=""></td>
                    </tr>
                     <tr>
                        <td>Gender</td>
                        <td><input class="input_horizently" type="text" name="gender" value=""></td>
                    </tr>
                     <tr>
                        <td>Age</td>
                        <td><input class="input_horizently" type="text" name="age" value=""></td>
                    </tr>
                    <tr>
                        <tr>
                        <td>salary</td>
                        <td><input class="input_horizently" type="number" name="salary" value=""></td>
                    </tr>
                    <tr>
                        <td>joining date</td>
                      
                        <td><input class="input_horizently" type="date" name="join" value=""></td>
                    </tr>
                        <td colspan="2"><input class="submit_button" type="submit" name="submit" value="create user"></td>
                    </tr>
                    
                </table>

            </form>
              
        </div>

        
    </div>

</body>
</html>
</body>
</html>