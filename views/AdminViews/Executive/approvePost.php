<?php 
    require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>History</title>
    <link rel="stylesheet" type="text/css" href="createUser.css">
    <style>
    .button_area_of_2nd_side_panel{
        color: white;
        align-items: center;
        position: absolute;
        margin-left:25px;
        margin-top: 30px;
    }
    .button_area_of_2nd_side_panel button{
        width: 200px;
        height: 30px;
        font-size: 16px;
        margin: 10px;

    }
    .function_area{
        margin-left:250px;
    }
    </style>
</head>
<body onload="getdata()">
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
        
           <span>Blogger reported Post</span><br>
           

           
          
          
            <table border="1px" align="center" width="80%" id="userTable">
                <tr>
                    <td ><input type="text" onkeyup="live()" id="words" placeholder="Enter username"></td>
                    <td colspan="6"><h3 id="notfound" style="background-color:red;font-size: 15px;"></h3></td>
                </tr>

                <tr>
                    <th>Username</th>
                    <th>post</th>
                    <th>Approve</th>
                    <th>Delete</th>
                    

                   
                </tr>
                    
                <tbody id="database">
                    
                </tbody>
            </table><br>

                

            
              
        </div>

        
    </div>

</body>
</html>
<script>
    function live() {
        let words = document.getElementById('words').value;
        let http = new XMLHttpRequest();
                    http.open('POST', '../../../controllers/adminControllers/excecutiveControllers/searchbloogerpost.php', true);
                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    http.send("word1="+words);
                    http.onreadystatechange = function()
                    {
                        
                        if(this.readyState == 4 && this.status == 200)
                        {
                            console.log(this.responseText);
                            if(this.responseText == "data not found"){
                                document.getElementById('notfound').innerHTML = "Data not found";

                            }
                            else
                            {
                                document.getElementById('notfound').innerHTML = "";
                                var data =  JSON.parse(this.responseText);
                            console.log(data);
                            var html = " ";
                            for (var i = 0; i<data.length;i++) {
                                var username = data[i].username;
                                var post = data[i].post;
                                
                                /*console.log(insertdata);
                                console.log(link);*/


                                html+= "<tr>";
                                    html+= "<td><input type='username' value='"
                                    +username+
                                            "'></td>";
                                            html+= "<td><input type='username' value='"
                                    +post+
                                            "'></td>";
                                            html+= "<td><button style = 'color:white;background-color:green;border:none;height:30px'>Approve"
                                    
                                            "'</button></td>";
                                            html+= "<td><button style = 'color:white;background-color:red;border:none;height:30px'>Delete"
                                    
                                            "'</button></td>";
                                            
                                           
                                html+= "</tr>";


                            }
                            document.getElementById("database").innerHTML = html;

                            }
                            
                            //document.getElementById("ap").color = "red";



                        }
                    }
    }
    
    function getdata()
    {
            /*let farmerusername = document.getElementById('farmerusername');
           */
                    let http = new XMLHttpRequest();
                    http.open('POST', '../../../controllers/adminControllers/excecutiveControllers/getbloggerpostcheack.php', true);
                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    http.send();
                    http.onreadystatechange = function()
                    {
                        
                        if(this.readyState == 4 && this.status == 200)
                        {
                            //console.log(this.responseText);
                            var data =  JSON.parse(this.responseText);
                            console.log(data);
                            var html = " ";
                            for (var i = 0; i<data.length;i++) {
                                var username = data[i].username;
                                var post = data[i].post;
                                
                                /*console.log(insertdata);
                                console.log(link);*/


                                html+= "<tr>";
                                    html+= "<td><input type='username' value='"
                                    +username+
                                            "'></td>";
                                            html+= "<td><input type='username' value='"
                                    +post+
                                            "'></td>";
                                            html+= "<td><button style = 'color:white;background-color:green;border:none;height:30px'>Approve"
                                    
                                            "'</button></td>";
                                            html+= "<td><button style = 'color:white;background-color:red;border:none;height:30px'>Delete"
                                    
                                            "'</button></td>";
                                            
                                           
                                html+= "</tr>";


                            }
                            document.getElementById("database").innerHTML = html;
                            //document.getElementById("ap").color = "red";



                        }
                    }
    }

</script>