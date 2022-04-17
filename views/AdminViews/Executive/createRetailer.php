<?php 
    require('header.php');
    require('../../../models/Retailer_info.php');
    $pendinguser = getpendinguser();
    $user = getuser();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farmer user list</title>
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
        
           <span>Reatiler user List</span>
            
              <table border="1px" width="300px" id="userTable" align="center" >
                <tr>
                    <th>Name</th>
                    <th>username</th>
                    <th>password</th>
                    <th>NID Number</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Gender</th>
                    <th>Trade License Number</th>
                    <th>photo</th>
                    <th>Status</th>
                </tr>
                <?php
                if ($pendinguser!=null) {
                    foreach($pendinguser as $pendinguser)
                    {


                ?>
                <tr>
                    <form  method="POST" action="../../../controllers/adminControllers/excecutiveControllers/retailercreateAccount.php">
                        <td><input class="input_ret" type="name" name="name" value="<?=$pendinguser['0']?>"></td>
                        <td><input class="input_ret" type="username" name="username" value="<?=$pendinguser['1']?>"></td>
                        <td><input class="input_ret" type="password" name="password" value="<?=$pendinguser['2']?>"></td>
                        <td><input class="input_ret" type="number" name="nidNumber" value="<?=$pendinguser['3']?>"></td>
                        <td><input class="input_ret" type="email" name="email" value="<?=$pendinguser['4']?>"></td>
                        <td><input class="input_ret" type="number" name="phoneNumber" value="<?=$pendinguser['5']?>"></td>
                        <td><input class="input_ret" type="text" name="gen" value="<?=$pendinguser['6']?>"></td>
                        <td><input class="input_ret" type="lnumber" name="licNumber" value="<?=$pendinguser['7']?>"></td>
                        <td>null</td>
                        <td><input class="submit_button" type="submit" name="submit" value="Add"></td>
                    </form>
                    
                </tr>
                <?php
                    }
                 }
        ?>
            </table>

            <br>
            <span align="center">User list</span>
            <table border="1px" width="80%" id="userTable">
                <tr>
                    <th>Name</th>
                    <th>username</th>
                    <th>password</th>
                    <th>NID Number</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Gender</th>
                    <th>Trade License Number</th>
                    <th>photo</th>
                </tr>
                <?php
                if ($user!=null) {
                    foreach($user as $user)
                    {


                ?>
                <tr>
                    <td><?=$user['0']?></td>
                    <td><?=$user['1']?></td>
               
                    <td><?=$user['3']?></td>
                    <td><?=$user['4']?></td>
                    <td><?=$user['5']?></td>
                    <td><?=$user['6']?></td>
                    <td><?=$user['7']?></td>
                    <td><?=$user['8']?></td>
                </tr>
                <?php
                    }
                 }
        ?>
            </table>


        
            <span align="center">Creat new user</span><br>
             <form  name="validationn" method="POST" action="../../../controllers/adminControllers/excecutiveControllers/retailercreateAccount.php">
               <table align="center" style="font-size:20px;">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input type="name" name="name" value="" placeholder="Enter Name"></td>
                        <td>Email:</td>
                        <td><input type="email" name="email" value=""placeholder="Enter Email" onblur ="validation()" onblur="submiton()" ></td>
                        <td><h1 id="eerror"></h1> </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input type="username" name="username" value="" placeholder="Enter Username"></td>
                        <td>ID:</td>
                        <td><input type="number" name="id" value=""placeholder="Enter ID"></td>
                    </tr>

                    <tr>
                        <td>Phone Number:</td>
                        <td width="300px "><input type="number" name="phoneNumber" value="" placeholder="Enter Phone Number" onblur ="phonevalidation()" ></td>
                        <td> <h1 id="nerror"></h1></td><br>
                        <td>Photo:</td>
                        <td><input type="file" name="" placeholder="Enter Photo"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Trade License number:</td>
                        <td><input type="lnumber" name="licNumber" value="" placeholder="Enter License Number"></td>   
                        <td>Trade License Copy:</td>
                        <td><input type="file" name="" placeholder="Enter License Copy"></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td width="300px "><input type="radio" name="gen" > Male <input type="radio" name="gen" > Female <input type="radio" name="gen" > Other </td>
                        <td>NID number:</td>
                        <td><input type="number" name="nidNumber" value="" placeholder="Enter NID"></td>   
                                          
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td width="300px "><input type="password" name="password" value="" placeholder="Enter Password"></td>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="pasword_extra" value=""placeholder="Confirm Password"></td>
                    </tr> 
                 
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  <input type="submit" name="submit" value="submit">   
                                  <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                 
                

                </table>
                    
            </form>
        </div>

        
    </div>

</body>
</html>


<script>

    function validation()
    {
        let email = document.validationn.email.value;
        var pattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email.match(pattern))
        {
            document.getElementById('eerror').innerHTML = "";
            
        }
        else{
            document.getElementById('eerror').innerHTML = "invalid email";
        }
        
    }
    function phonevalidation()
    {
        let phonenumber = document.validationn.phoneNumber.value;
        var pnumber = /(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/;
        if(phonenumber.match(pnumber))
        {
            document.getElementById('nerror').innerHTML = "";
            
        }
        else{
            document.getElementById('nerror').innerHTML = "invalid phonenumber";
        }
        
    }
</script>