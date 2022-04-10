<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farmer Create Account</title>
    <link rel="stylesheet" type="text/css" href="farmercreateedit.css">
    <link rel="stylesheet" type="text/css" href="farmerHomes.css">

</head>
<body>
       <!--  menubar start from here -->

    <div class="menubar">
        <div class="menubar-icon">
            <img src="images/logo.png">
        </div>
        <div class="menubar-link">
            <a href="">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../controllers/farmerControllers/logout.php"> Logout </a>
        </div>
        
    </div>


<!-- create farmer -->

<h1 align="center"> Create Account For Farmer </h1> 
<div>
    <form name="validationn" method="POST" enctype="multipart/form-data" action="../../controllers/farmerControllers/regcheck.php">
               <table align="center" style="font-size:20px;" class="create_user">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input class="input" type="name" name="name" value="" placeholder="Enter Name"></td>
                        <td>Email:</td>
                        <td><input class="input" type="email" id="email"  name="email" value=""placeholder="Enter Email" onblur ="checkemail()" ><p id="emailchk"></p></td>
                        <td></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input class="input" id="username" type="username" name="username" value="" placeholder="Enter Username" onblur="checkusername()"><p id="valid"></p></td>
                        <td>Phone Number:</td>
                        <td width="300px "><input  class="input" type="number" name="phoneNumber" value="" placeholder="Enter Phone Number" ></td>
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
                        <td><input class="input" type="password" id="password2" name="cpassword" value=""placeholder="Confirm Password" >
                        </td>
                    </tr> 
                    
                   
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  
                                </td>
                            </tr>
                  
                

                </table>
                                  <input class="submit_button" id="submited" type="submit" name="submit" value="Create">   
                                  <!-- <input class="submit_button" type="reset" name="reset" value="Reset"> -->
                    
            </form>
</div>
<!-- /*ajax code start from  here*/
/*username check function*/ -->
<script>

    function checkusername(){
            let username = document.getElementById('username').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('POST', '../../controllers/farmerControllers/regcheck.php', true);
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
function checkemail(){
            let email = document.getElementById('email').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('POST', '../../controllers/farmerControllers/regcheck.php', true);
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

</script>



































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
                    <td><a href="farmerHome.php">Home  |</a></td>
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
            <h1 align="center"> Create Account For Farmer </h1> <hr>
            <table border="1" align="center">
            <form  name="validationn" method="POST" action="../../controllers/farmerControllers/regcheck.php">
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
                        <td width="300px "><input type="username" name="username" value="" placeholder="Enter Username" onblur ="usernamevalid()" ></td>
                        <td> <h1 id="uerror"></h1></td><br>
                        <td>Phone Number:</td>
                        <td width="300px "><input type="number" name="phoneNumber" value="" placeholder="Enter Phone Number"  onblur ="phonevalidation()" ></td>
                        <td> <h1 id="nerror"></h1></td><br>

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
                        <td width="300px "><input type="password" name="password" value="" placeholder="Enter Password"></td>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="password_extra" value=""placeholder="Confirm Password"></td>
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


</html> -->
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

    // function usernamevalid(){
    // var validusername = document.validationn.username.value;
    // var nameRegex = /^[a-zA-Z\-]+$/;
    // if(validusername.match(nameRegex))
    //     {
    //         document.getElementById('uerror').innerHTML = "";
            
    //     }
    //     else{
    //         document.getElementById('uerror').innerHTML = "Invalid Username";
    //     }
        
    // }


</script>