<?php 
    require('header.php');
    require('../../../models/farmer_info.php');
    $user = getuser();
    //print_r($user);
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
    <title>Farmer user list</title>
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
        
           <span>Farmer user List</span>
            <table border="1px" align="center" width="80%" id="userTable">

                <tr>
                    <th>username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Farmer Type</th>
                    <th>gender</th>
                    <th>Nid</th>
                    <th>Photo</th>
                </tr>
                <?php

                if($user!=null){
                foreach ($user as $user) {


                    ?>

                <tr>
                    <td><?=$user['0']?></td>
                    <td><?=$user['2']?></td>
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
            <span align="center">Create new user</span>
            <h3 id="eerror" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <h3 id="nerror" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <h3 id="msg" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <form name="validationn" method="POST" action="../../../controllers/adminControllers/excecutiveControllers/FarmerCreatAccount.php">
               <table align="center" style="font-size:20px;" class="create_user">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input class="input" type="name" name="name" value="" placeholder="Enter Name"></td>
                        <td>Email:</td>
                        <td><input class="input" type="email" name="email" value=""placeholder="Enter Email" onblur ="validation()"></td>
                        <td></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input class="input" type="username" name="username" value="" placeholder="Enter Username"></td>
                        <td>Phone Number:</td>
                        <td width="300px "><input  class="input" type="number" name="phoneNumber" value="" placeholder="Enter Phone Number" onblur ="phonevalidation()" ></td>
                        <td></td><br>

                    </tr>

                    <tr>
                        <td>NID Number:</td>
                        <td><input class="input" type="number" name="nidNumber" value="" placeholder="Enter NID"></td> 
                        <td>Photo:</td>
                        <td><input class="input" type="file" name="" placeholder="Enter Photo"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Gender:</td>
                        <td width="300px "><input class="input" type="radio" name="gen" value="male" > Male 
                        <input class="input" type="radio" name="gen" value="female" > Female <input class="input" type="radio" name="gen" > Other </td>
                        <td>Farmer Type:</td>                        
                        <td width="300px "><input class="input" type="radio" name="farmerType" value="plantation" > Plantation <input class="input" type="radio" name="farmerType" value="Husbandry" > Husbandary <input class="input" type="radio" name="farmerType" value="Fisheries" > Fisheries </td>                 
                    </tr>
                    <br>
                    <tr>
                        <td>Password:</td>
                        <td width="300px "><input class="input" id="password1" type="password" name="password" value="" placeholder="Enter Password"></td>
                        <td>Confirm Password:</td>
                        <td><input class="input" type="password" id="password2" name="cpassword" value=""placeholder="Confirm Password" onkeyup ="passchechk()">
                        </td>
                    </tr> 
                    
                   
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  
                                </td>
                            </tr>
                  
                

                </table>
                                  <input class="submit_button" id="submited" type="submit" name="submit" value="submit">   
                                  <input class="submit_button" type="reset" name="reset" value="Reset">
                    
            </form>
              
        </div>

        
    </div>

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

            <h3 align = center>Farmer user List</h3>
            <table border="1px" align="center" width="80%">
                <tr>
                    <td>username</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone number</td>
                    <td>Farmer Type</td>
                    <td>gender</td>
                    <td>Nid</td>
                    <td>Photo</td>
                </tr>
                <?php

                if($user!=null){
                foreach ($user as $user) {


                    ?>

                <tr>
                    <td><?=$user['0']?></td>
                    <td><?=$user['2']?></td>
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
            <h3 align="center">Creat new user</h3><br>
            <h3 id="eerror" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <h3 id="nerror" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <h3 id="msg" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <form name="validationn" method="POST" action="../../../controllers/adminControllers/excecutiveControllers/FarmerCreatAccount.php">
               <table align="center" style="font-size:20px;">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input type="name" name="name" value="" placeholder="Enter Name"></td>
                        <td>Email:</td>
                        <td><input type="email" name="email" value=""placeholder="Enter Email" onblur ="validation()"></td>
                        <td></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input type="username" name="username" value="" placeholder="Enter Username"></td>
                        <td>Phone Number:</td>
                        <td width="300px "><input type="number" name="phoneNumber" value="" placeholder="Enter Phone Number" onblur ="phonevalidation()" ></td>
                        <td></td><br>

                    </tr>

                    <tr>
                        <td>NID Number:</td>
                        <td><input type="number" name="nidNumber" value="" placeholder="Enter NID"></td> 
                        <td>Photo:</td>
                        <td><input type="file" name="" placeholder="Enter Photo"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Gender:</td>
                        <td width="300px "><input type="radio" name="gen" value="male" > Male 
                        <input type="radio" name="gen" value="female" > Female <input type="radio" name="gen" > Other </td>
                        <td>Farmer Type:</td>                        
                        <td width="300px "><input type="radio" name="farmerType" value="plantation" > Plantation <input type="radio" name="farmerType" value="Husbandry" > Husbandary <input type="radio" name="farmerType" value="Fisheries" > Fisheries </td>                 
                    </tr>
                    <br>
                    <tr>
                        <td>Password:</td>
                        <td width="300px "><input id="password1" type="password" name="password" value="" placeholder="Enter Password"></td>
                        <td>Confirm Password:</td>
                        <td><input type="password" id="password2" name="cpassword" value=""placeholder="Confirm Password" onkeyup ="passchechk()">
                        </td>
                    </tr> 
                    
                   
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  <input id="submited" type="submit" name="submit" value="submit">   
                                  <input type="reset" name="reset" value="Reset">
                                </td>
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
<script>
    function passchechk()
    {
       let p1 = document.getElementById('password1').value;
       let p2 = document.getElementById('password2').value;
       if (p1!=p2)
       {
            document.getElementById('msg').innerHTML = "password dont match";
            document.getElementById('msg').style.backgroundColor = "#f8c291";

            document.getElementById('submited').style.display = "none";
           //console.log("Fsfsdf");
        }
        else{
            document.getElementById('msg').innerHTML = "password matched";
            document.getElementById('msg').style.backgroundColor = "#78e08f";
            document.getElementById('submited').style.display = "block";
        }


    }
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