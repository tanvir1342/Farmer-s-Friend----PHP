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
    <title>Research Paper</title>
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
        <h2 class="daynamic_area_heading_text">Research Paper</h2><hr>
               <table align="center" style="font-size:20px;" class="create_user">
                <form method="POST">
                    <tr>
                        <td>Blogger Username</td>
                        <td><input class="input" id="blogger_username" type="username" name="blogger_username" value="<?=$user['username']?>"></td>
                    </tr>
                    <tr>
                        <td>Domain name</td>
                        <td><input class="input" id="domain_name" type="text" name="domain_name" value=""></td>
                    </tr>

                    <tr>
                        <td>Thesis Topic</td>
                        <td><input class="input" id="thesis_topic" type="text" name="thesis_topic" value=""></td>
                    </tr>
                    <tr>
                        <td>Publish Your Research Paper</td>
                        <td><textarea class="input" id="research_paper" name="research_paper" rows="10" cols="100"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="submit_button" onclick="ajaxinsertdata()">Submit</button></td>
                    </tr>
                </form>
                
            </table>


             <script>

            function ajaxinsertdata(){
            let blogger_username = document.getElementById('blogger_username').value;
            let domain_name = document.getElementById('domain_name').value;
            let thesis_topic = document.getElementById('thesis_topic').value;
            let research_paper = document.getElementById('research_paper').value;
            
            var dataString = 'blogger_username1=' + blogger_username + '&domain_name1=' + domain_name + '&thesis_topic1=' + thesis_topic + '&research_paper1=' + research_paper;
            console.log (dataString);  
            if (blogger_username == '' || domain_name == '' || thesis_topic == '' || research_paper == '') {
            alert("Please Fill All Fields");
            } else {
// AJAX code to submit form.\

            let http = new XMLHttpRequest();
            http.open('POST', '../../controllers/bloggerControllers/BloggerResearchPaperPendingCheck.php', true);
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


















