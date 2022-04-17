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
       <!--<div class="side_panel">
             <div class="button_area_of_2nd_side_panel"> -->
            


        </div>
       </div>
      <!--  main panel daynamic area star from here -->
        <div class="daynamic_area">
            
            <span align="center">Create New Account</span>
            <h3 id="eerror" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <h3 id="nerror" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <h3 id="msg" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <form name="validationn" method="POST" enctype="multipart/form-data" action="../../controllers/bloggerControllers/regcheck.php">
               <table align="center" style="font-size:20px;" class="create_user">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input class="input" type="name" name="name" value="" placeholder="Enter Name"></td>
                        <td>Email:</td>
                        <td width="300px"><input class="input" type="email" id="email" name="email" value=""placeholder="Enter Email" onblur ="ValidateEmail(), emailcheck()" ><p id="emailchk"></td>
                        
                    </tr>
                    
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input class="input" type="username" id="username" name="username" value="" onblur="checkusername()" placeholder="Enter Username"><p id="valid"></p></td>
                        <td>Phone Number:</td>
                        <td width="300px "><input  class="input" type="number" id="phoneNumber" name="phone" onblur="phonenumbervalidtion()" value="" placeholder="Enter Phone Number"  ></td>
                        <td></td><br>

                    </tr>

                    
                    <br>
                    <tr>
                        <td>Gender:</td>
                        <td width="300px "><input class="input" type="radio" name="gender" value="male" > Male 
                        <input class="input" type="radio" name="gender" value="female" > Female <input class="input" type="radio" name="gender" > Other </td>

                        <td>Photo:</td>
                        <td><input class="input" type="file" name="image" placeholder="Enter Photo"></td>
                                       
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

/*username check function*/
    function checkusername(){
            let username = document.getElementById('username').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('POST', '../../controllers/bloggerControllers/regcheck.php', true);
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

  /*  email check function*/

function emailcheck(){
            let email = document.getElementById('email').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('POST', '../../controllers/bloggerControllers/regcheck.php', true);
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



