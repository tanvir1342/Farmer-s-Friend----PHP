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
                    <td><img src="../../../models/Farmerupload/<?=$user['8']?>" width=70px></td> 
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
            <form name="validationn" method="POST" enctype="multipart/form-data" action="../../../controllers/adminControllers/excecutiveControllers/FarmerCreatAccount.php" >
               <table align="center" style="font-size:20px;" class="create_user">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input class="input" type="name" name="name" value="" placeholder="Enter Name"></td>
                        <td>Email:</td>
                        <td><input class="input" type="email" id="email" name="email" value=""placeholder="Enter Email" onblur ="ValidateEmail(), emailcheck()" ><p id="emailchk"></td>
                        <td></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input class="input" type="username" id="username" name="username" value="" onblur="chkusername()" placeholder="Enter Username"><p id="valid"></p></td>
                        <td>Phone Number:</td>
                        <td width="300px "><input  class="input" type="number" id="phoneNumber" name="phoneNumber" onblur="phonenumbervalidtion()" value="" placeholder="Enter Phone Number"  ></td>
                        <td></td><br>

                    </tr>

                    <tr>
                        <td>NID Number:</td>
                        <td><input class="input" type="number" name="nidNumber" value="" placeholder="Enter NID"></td> 
                        <td>Photo:</td>
                        <td><input class="input" type="file" name="image" placeholder="Enter Photo"></td>
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
/*ajax code start from  here*/
/*username chehck function*/
    function chkusername(){
            let username = document.getElementById('username').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('POST', '../../../controllers/adminControllers/excecutiveControllers/FarmerCreatAccount.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('username='+username);

            xhttp.onreadystatechange = function (){

                if(this.readyState == 4 && this.status == 200){
                    //alert(this.responseText);
                    document.getElementById('valid').innerHTML = this.responseText;
                    document.getElementById('valid').style.color = "red";
                    document.getElementById('valid').style.fontSize = 12+'px';


                }
            }
    }

  /*  email chehck function
*/
function emailcheck(){
            let email = document.getElementById('email').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('POST', '../../../controllers/adminControllers/excecutiveControllers/FarmerCreatAccount.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('email='+email);

            xhttp.onreadystatechange = function (){

                if(this.readyState == 4 && this.status == 200){
                    //alert(this.responseText);
                    document.getElementById('emailchk').innerHTML = this.responseText;
                    document.getElementById('emailchk').style.color = "red";
                    document.getElementById('emailchk').style.fontSize = 12+'px';


                }
            }
    }

/*email validation function*/
function IsValidEmail(email) {
        //Check minimum valid length of an Email.
        if (email.length <= 2) {
            return false;
        }
        //If whether email has @ character.
        if (email.indexOf("@") == -1) {
            return false;
        }
 
        var parts = email.split("@");
        var dot = parts[1].indexOf(".");
        var len = parts[1].length;
        var dotSplits = parts[1].split(".");
        var dotCount = dotSplits.length - 1;
 
 
        //Check whether Dot is present, and that too minimum 1 character after @.
        if (dot == -1 || dot < 2 || dotCount > 2) {
            return false;
        }
 
        //Check whether Dot is not the last character and dots are not repeated.
        for (var i = 0; i < dotSplits.length; i++) {
            if (dotSplits[i].length == 0) {
                return false;
            }
        }
 
        return true;
    };
/*email validation function calling*/
function ValidateEmail() {
        var email = document.getElementById("email").value;
        var error = document.getElementById("eerror");
        error.innerHTML = "";
        if (!IsValidEmail(email)) {
            error.innerHTML = "Invalid email address.";
        }
    }



/*phone number validation*/

function phonenumbervalidtion() {
    var number = document.getElementById("phoneNumber").value;
    var two = number.substring(0,2);
    if(number.length> 11 || number.length<11)
    {
        document.getElementById("nerror").innerHTML = "invalid phonenumber";
    }
    else if(two!= 01 )
    {
        document.getElementById("nerror").innerHTML = "invalid phonenumber";
    }
    else
    {
        document.getElementById("nerror").innerHTML = "";
    }
}

</script>