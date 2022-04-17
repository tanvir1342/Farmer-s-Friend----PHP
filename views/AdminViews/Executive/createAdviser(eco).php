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
                    <td><img src="<?=$user['8']?>" width=70px></td> 
                </tr>
                <?php
                    
                }
                }

                ?>
                
            </table><br>

        
            <h3 align="center"><?=$msg?></h3><br>
            <span align="center">Create new user</span><br>
            <!-- email error msg -->
            <h3 id="emailerror" style="font-size:16px; text-align: center; color: white; background-color: red;"></h3>
            <!-- create account form -->
             <form  method="POST" enctype="multipart/form-data" action="../../../controllers/adminControllers/excecutiveControllers/ecocreataccount.php">
                <table class="userTable userTable_horizently" align="center" >
                    <tr>
                        <td>Name</td>
                        <td><input class="input_horizently" id="name" type="name" name="name" value=""></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input class="input_horizently" id="username" onblur="chkusername()" type="username" name="username" value=""> <p id="valid"></p></td>
                 
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input class="input_horizently" id="password" type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input class="input_horizently" id="email" onblur="emailcheck() , ValidateEmail()" type="email" name="email" value=""> <p id="emailchk"></p></td>
                    </tr>
                     <tr>
                        <td>Gender</td>
                        <td><input class="input_horizently" id="gender" type="text" name="gender" value=""></td>
                    </tr>
                     <tr>
                        <td>Age</td>
                        <td><input class="input_horizently" id="age" type="text" name="age" value=""></td>
                    </tr>
                    <tr>
                        <td>Photo</td>
                        <td><input class="input_horizently" id="image" type="file" name="image" accept="image/png, image/jpeg" value=""></td>
                    </tr>
                    <tr>
                        <tr>
                        <td>salary</td>
                        <td><input class="input_horizently" id="salary" type="number" name="salary" value=""></td>
                    </tr>
                    <tr>
                        <td>joining date</td>
                      
                        <td><input class="input_horizently" id="join" type="date" name="join" value=""></td>
                    </tr>
                        <td colspan="2"><input class="submit_button" type="submit" name="submit" id="submit"   value="create user"></td>

                        
                    </tr>
                    
                </table>

            </form>
              
        </div>

        
    </div>

</body>
</html>


<script>
    /*username chehck function*/
    function chkusername(){
            let username = document.getElementById('username').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('POST', '../../../controllers/adminControllers/excecutiveControllers/ecocreataccount.php', true);
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

            xhttp.open('POST', '../../../controllers/adminControllers/excecutiveControllers/ecocreataccount.php', true);
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
        var error = document.getElementById("emailerror");
        error.innerHTML = "";
        if (!IsValidEmail(email)) {
            error.innerHTML = "Invalid email address.";
        }
    }






















































    /*function ajaxinsertdata(){
            let username = document.getElementById('username').value;
            let name = document.getElementById('name').value;
            let password = document.getElementById('password').value;
            let email = document.getElementById('email').value;
            let gender = document.getElementById('gender').value;
            let age = document.getElementById('age').value;
            let image = document.getElementById('image').value;
            let salary = document.getElementById('salary').value;
            let join = document.getElementById('join').value;
            var dataString = 'username1=' + username + '&name1=' + name + '&email1=' + email + '&password1=' + password + '&gender1=' + gender + '&age1=' + age+ '&salary1=' + salary + '&join1=' + join;
           if (name == '' || email == '' || password == '') {
                alert("Please Fill All Fields");
                } else {
                // AJAX code to submit form.\
                    
                    let http = new XMLHttpRequest();
                    http.open('POST', '../../../controllers/adminControllers/excecutiveControllers/ecocreataccount.php', true);
                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    http.send(dataString);
                    http.onreadystatechange = function(){
                        
                        if(this.readyState == 4 && this.status == 200){
                            document.getElementById('h3').innerHTML = this.responseText;;
                        }
                        }
                        }
                        }
    function fileupload()
    {
          let formData = new FormData(); 
          formData.append("file", fileupload.files[0]);
          await fetch('/../../../controllers/adminControllers/excecutiveControllers/ecocreataccount.php', {
            method: "POST", 
            body: formData
          }); 
          alert('The file has been uploaded successfully.');
    }*/

</script>

