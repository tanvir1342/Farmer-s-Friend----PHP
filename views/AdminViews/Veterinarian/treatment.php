<?php 
    require('header.php');
    require('../../../models/farmer_vet_support.php');
    $post = getallpost();
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farmer Post</title>
    <link rel="stylesheet" type="text/css" href="createUser.css">
    <link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
    <div class="menubar">
        <div class="menubar-icon">
            <img src="logo.png">
        </div>
        <div class="menubar-link">
            <a href="">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../../controllers/adminControllers/VeterinarianControllers/logout.php"> Logout </a>
        </div>
        
    </div>
    <div class="main_panle">
       <!--  side panel div start from here -->
       <div class="side_panel">
             <div class="button_area_of_2nd_side_panel">
            <button onclick="location.href='EditProfile.php';">Edit Profile</button>
            <button onclick="location.href='treatment.php';">Farmer's Post</button>
            <button onclick="location.href='history.php';">History</button>
        


        </div>
       </div>
       <div class="daynamic_area">

            <h1 align = center>Farmer's Post</h1><hr>
            <?php
            if($post!= null)
            {
                foreach($post as $post)
                {
               ?>
            
            
            <form method="POST" action="../../../controllers/adminControllers/VeterinarianControllers/VetTreatmentCheck.php">
             <span>Quick Treatment</span>
            <table border="1px" align="center" width="80%" id="userTable">
                 <tr>
                     <td width="20%">Farmer name</td>
                     <td>Farmer type</td>
                 </tr>
                 <tr>
                     <td><input type="username" name="username" value="<?=$post[0]?>"></td>
                     <td><input type="text" name="type" value="<?=$post[2]?>"></td>
                 </tr>
                 <tr>
                     <td>Description</td>
                     <td><textarea cols="100" rows="10" name="description"><?=$post[3]?></textarea></td>
                 </tr>
                 <tr>
                    <td>Quick tratment</td>
                    <td><textarea cols="100" rows="10" name="solve"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Send to farmer"></td>
                </tr>
             </table>
            </form>
            <br>
            <br>
            <?php
        }
    }
    ?>
            
            <br>
            
        </td>
    </tr>

</table>


</html>