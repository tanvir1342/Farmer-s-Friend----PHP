<?php 
    require('header.php');
    require('../../models/Blogger_info.php');
    $username = $_SESSION['Blogger_username'];
    $user  = getoneuser($username);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Write a Post</title>
    <link rel="stylesheet" type="text/css" href="template.css">
    <link rel="stylesheet" type="text/css" href="createUser.css">


</head>
<body>
       <!--  menubar start from here -->

    <div class="menubar">
        <div class="menubar-icon">
            <img src="logo.png">
        </div>
        <div class="menubar-link">
            <a href="farmerHome.php">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../controllers/bloggerControllers/logout.php"> Logout </a>
        </div>
        
    </div>

       <!--  main panel -->
    <div height="100%" class="main_panle">
       <!--  side panel div start from here -->
       <div  class="side_panel">      
        
            <div class="button_area_of_2nd_side_panel">
            <button onclick="location.href='EditAccount.php';">Edit Profile</button>
            <button onclick="location.href='WritePost.php';">Write a Post</button>
            <button onclick="location.href='ReadPost.php';">Read Posts</button>
            <button onclick="location.href='PublishResearchPaper.php';">Research Paper</button>
            

        </div>
    </div>

    <!-- feature page -->

    <div class="daynamic_area">
        <h2 class="daynamic_area_heading_text">Write Content about Agriculture</h2><hr>
               <table align="center" style="font-size:20px;" class="create_user">
                <form method="POST">
                    <tr>
                        <td>Username</td>
                        <td><input class="input"  type="username" id="username" name="username" value="<?=$user['username']?>"></td>
                    </tr>
                    <tr>
                        <td>Blogger name</td>
                        <td><input class="input" type="text" id="blogger_name" name="blogger_name" value="<?=$user['name']?>"></td>
                    </tr>
                    <tr>
                        <td>Write a Post</td>
                        <td><textarea class="input" id="post" name="post" rows="10" cols="100"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" class="submit_button" onclick="ajaxinsertdata()" value="Submit"></td>
                    </tr>
                </form>
                
            </table>





        <script>

            function ajaxinsertdata(){
            let username = document.getElementById('username').value;
            let blogger_name = document.getElementById('blogger_name').value;
            let post = document.getElementById('post').value;
            
            var dataString = 'username1=' + username + '&blogger_name1=' + blogger_name + '&post1=' + post;
            console.log (dataString);  
            if (username == '' || blogger_name == '' || post == '') {
            alert("Please Fill All Fields");
            } else {
// AJAX code to submit form.\

            let http = new XMLHttpRequest();
            http.open('POST', '../../controllers/bloggerControllers/BloggerPostPendingCheck.php', true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send(dataString);
            http.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                alert(this.responseText);
//document.getElementById('h3').innerHTML = this.responseText;;
}
}
}
}

            









        </script>


















