<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="createUser.css">
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
            <a href="../../controllers/bloggerControllers/logout.php"> Logout </a>
        </div>
        
    </div>
    <div class="main_panle">
       <!--  side panel div start from here -->
       <div class="side_panel">
             <div class="button_area_of_2nd_side_panel">
            


        </div>
       </div>
      <!--  main panel daynamic area star from here -->
        <div class="daynamic_area">
            
            <span align="center">Create New Account</span>
            <h3 id="eerror" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <h3 id="nerror" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <h3 id="msg" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <form name="validationn" method="POST" action="../../controllers/bloggerControllers/regcheck.php">
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
                        <td width="300px "><input  class="input" type="number" name="phone" value="" placeholder="Enter Phone Number" onblur ="phonevalidation()" ></td>
                        <td></td><br>

                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td width="300px "><input class="input" type="radio" name="gender" value="male" > Male 
                        <input class="input" type="radio" name="gender" value="female" > Female <input class="input" type="radio" name="gender" > Other </td>
                                         
                        
                        <td>Photo:</td>
                        <td><input class="input" type="file" name="" placeholder="Enter Photo"></td>
                    </tr>
                    <br>
                    
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
                                  <input class="submit_button" id="submited" type="submit" name="submit" value="Submit">   
                                  <input class="submit_button" type="reset" name="reset" value="Reset">
                    
            </form>
              
        </div>

        
    </div>

</body>
</html>




<!--<!DOCTYPE html>
<html>
 Table creation
<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
                 center menubar 
                <tr style ="font-size:20px;">
					<a href="bloggerHome.php">Home</a>
					<a href="0">| About Us</a>
					<a href="../../controllers/bloggerControllers/logout.php">| Logout</a>
                </tr>
            </table>
        </td>
    </tr>
      Dashboard of Blogger
   <tr  height = 700px>
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">

        </td>
         Output 
        <td valign="top">
            <h1 align="center"> Create Account For Blogger </h1> <hr>
            <table border="1" align="center">
            <form name="validationn" method="POST" action="../../controllers/bloggerControllers/regcheck.php">
               <table align="center" style="font-size:20px;">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input type="name" name="name" value=""></td>
                        <td>Email:</td>
                        <td><input type="email" name="email" onblur="validation()" onblur="submiton()" value=""></td>
                        <h1 align="center" id="eerror"></h1>
                    </tr>
                    <br>
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input type="username" name="username" value=""></td>
                        
                    </tr>

                    <tr>
                        <td>Phone Number:</td>
                        <td width="300px "><input type="number" name="phone" onblur="phonevalidation()" value=""></td>
                        <h1 align="center" id="nerror"></h1><br>
                        <td>Photo:</td>
                        <td><input type="file" name=""></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Gender:</td>
                        <td width="300px "><input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="Female" > Female <input type="radio" name="gender" value="other" > Other </td>
                                          
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td width="300px "><input type="password" name="password" value=""></td>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="password_extra" value=""></td>
                    </tr> 
                    
                     <table align="center" > 
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  <input type="submit" name="submit" value="Submit">   
                                  <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                     </table> 
                

                </table>
                    
            </form> 
        </td>
    </tr>
     Footer Part 
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights @2022 Reserved by Gallant ltd.
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



