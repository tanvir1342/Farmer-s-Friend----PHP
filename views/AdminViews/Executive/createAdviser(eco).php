<?php 
    require('header.php');
    require('../../../models/adviser(eco)_info.php');
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
            <a href="">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../../controllers/adminControllers/excecutiveControllers/logout.php"> Logout </a>
        </div>
        
    </div>
    <div class="main_panle">
       <!--  side panel div start from here -->
       <div class="side_panel">
             <div class="button_area_of_2nd_side_panel">
            <button>User info</button>
            <button>Control deal</button>
            <button>Post chehck</button>
            <button>Edit profile</button>


        </div>
       </div>
      <!--  main panel daynamic area star from here -->
        <div class="daynamic_area">
        
           <span align = center>Adviser(Economics) user List</span>
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

            <form method="POST" action="../../../controllers/adminControllers/excecutiveControllers/ecocreataccount.php">
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
                    <td><a href="Home.php">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../../controllers/adminControllers/excecutiveControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
  
    <tr  height = 700px>
        <td width =10%; valign = top; style ="background-color:#C1BCBC; font-size:20px;">
            <a href="listOfuser.php">user Account</a><br><br>
            <a href="verifyDocument.php">verfiy ducument</a><br><br>
            <a href="controlDeaL.php">control deal</a><br><br>
            <a href="approvePost.php">Approve post</a><br><br>
            <a href="EditProfile.php">Edit profile</a><br><br>
        </td>
     
        <td valign = top style ="background-color:#F5F2F1 ">

            <h3 align = center>Adviser(Economics) user List</h3>
            <table border="1px" align="center" width="80%">
                <tr>
                    <td>Name</td>
                    <td>username</td>
                    <td>email</td>
                    <td>gender</td>
                    <td>Age</td>
                    <td>salary</td>
                    <td>joining Date</td>
                    <td>photo</td>
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
            <h3 align="center">Create new user</h3><br>

            <form method="POST" action="../../../controllers/adminControllers/excecutiveControllers/ecocreataccount.php">
                <table align="center">
                    <tr>
                        <td>Name</td>
                        <td><input type="name" name="name" value=""></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="username" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value=""></td>
                    </tr>
                     <tr>
                        <td>Gender</td>
                        <td><input type="text" name="gender" value=""></td>
                    </tr>
                     <tr>
                        <td>Age</td>
                        <td><input type="text" name="age" value=""></td>
                    </tr>
                    <tr>
                        <tr>
                        <td>salary</td>
                        <td><input type="number" name="salary" value=""></td>
                    </tr>
                    <tr>
                        <td>joining date</td>
                        <td><input type="date" name="join" value=""></td>
                    </tr>
                        <td colspan="2"><input type="submit" name="submit" value="create user"></td>
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