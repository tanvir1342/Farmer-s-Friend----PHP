
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retailer user list</title>
    <link rel="stylesheet" type="text/css" href="createUser.css">
   <!--  <link rel="stylesheet" type="text/css" href="style.css"> -->
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
            <a href="../../controllers/retailerControllers/logout.php"> Logout </a>
        </div>
        
    </div>
    <div class="main_panle">
      
       
  
        <div class="daynamic_area">
        
           <br>

          
            
           
            <span align="center">Create new user</span>
            <h3 id="eerror" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <h3 id="nerror" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <h3 id="msg" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <form name="validationn" method="POST" enctype="multipart/form-data" action="../../controllers/retailerControllers/regcheck.php" >
               <table align="center" style="font-size:20px;" class="create_user">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input type="name" name="name" value="" placeholder="Enter Name"></td>
                        <td>Email:</td>
                        <td><input class="input" type="email" id="email" name="email" value=""placeholder="Enter Email" onblur ="ValidateEmail(), emailcheck()" ><p id="emailchk"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input class="input" type="username" id="username" name="username" value="" onblur="chkusername()" placeholder="Enter Username"><p id="valid"></p></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Phone Number:</td>
                        <td width="300px "><input  class="input" type="number" id="phoneNumber" name="phoneNumber" onblur="phonenumbervalidtion()" value="" placeholder="Enter Phone Number"  ></td>
                         <td>Photo:</td>
                        <td><input class="input" type="file" name="image" placeholder="Enter Photo"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Trade License number:</td>
                        <td><input type="lnumber" name="licNumber" value="" placeholder="Enter License Number"></td>   
                        <!-- <td>Trade License Copy:</td>
                        
                        <td><input class="input" type="file" name="image" placeholder="Enter License Copy"></td> -->
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td width="300px "><input type="radio" name="gen" value="Male"> Male <input type="radio" name="gen" value="Female"> Female <input type="radio" name="gen" value="Other"> Other </td>
                        <td>NID number:</td>
                        <td><input type="number" name="nidNumber" value="" placeholder="Enter NID"></td>   
                                          
                    </tr>
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
/*username chehck function*/
    function chkusername(){
            let username = document.getElementById('username').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('POST', '../../controllers/retailerControllers/regcheck.php', true);
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

            xhttp.open('POST', '../../controllers/retailerControllers/regcheck.php', true);
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






<!-- 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account</title>
</head>
<body>

<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
               
                <tr style ="font-size:20px;">
                    <td><a href="retailerHome.php">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="#"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>

  <tr  height = 700px>
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">

        </td>

        <td valign="top">
            <h1 align="center"> Create Account For Retailer </h1> <hr>
            <table border="1" align="center">
            <form name="validationn" method="POST" action="../../controllers/retailerControllers/regcheck.php">
               <table align="center" style="font-size:20px;">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input type="name" name="name" value="" placeholder="Enter Name"></td>
                        <td>Email:</td>
                        <td><input type="email" name="email" value=""placeholder="Enter Email"  onblur ="validation()" onblur="submiton()"> 
                        <h1 id="eerror"></h1></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input type="username" name="username" value="" placeholder="Enter Username"></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Phone Number:</td>
                        <td width="300px "><input type="number" name="phoneNumber" value="" placeholder="Enter Phone Number" onblur ="phonevalidation()">
                        <h1 id="nerror"></h1>
                    </td>
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
        </td>
    </tr>

    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights @2022 Reserved by Gallant ltd.
        </td>
    </tr>
</table>
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
</script> -->
<!--  
<?php 
   /* require('header.php');*/
    require('../../models/Retailer_info.php');
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
    <link rel="stylesheet" type="text/css" href="style.css">
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
       
       <div class="side_panel">
             <div class="button_area_of_2nd_side_panel">
           

        </div>
       </div>
 
        <div class="daynamic_area">
        
       
            
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
 -->
       <!--      <br>
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
</script> -->