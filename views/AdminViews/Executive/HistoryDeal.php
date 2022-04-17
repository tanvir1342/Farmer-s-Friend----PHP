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
</head>
<body onload="getdata()">
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
        
           <span>History of deal</span><br>
           
          
          
            <table border="1px" align="center" width="80%" id="userTable">
                <tr>
                    <td colspan="7"><input type="text" onkeyup="live()" id="words"></td>
                </tr>

                <tr>
                    <th>Farmer</th>
                    <th>Retailer</th>
                    <th>PN</th>
                    <th>Discription</th>
                    <th>Quantitiy</th>
                    <th>Amount</th>
                    <th>Date</th>

                   
                </tr>
                    

                <!-- <tr>
                    <td><input type="username"  id ="farmerusername"></td>
                    <td><input type="username"  id ="retailerusername"></td>
                    <td><input type="text"  id ="pn"></td>
                    <td><input type="text"  id ="discription"></td>
                    <td><input type="text"  id ="qntty"></td>
                    <td><input type="text"  id ="amount"></td>
                    <td><input type="date"  id ="date"></td>
                    <td><button>Approve</button></td>
                    <td><button>Rejected</button></td>
                </tr> -->
                <tbody id="database">
                   <!--  <tr>
                        <td><button>hello</button></td>
                        <td><button>hello</button></td>

                    </tr> -->
                    
                </tbody>
            </table><br>

            

          
            
            <!-- <h3 align="center"><?=$msg?></h3><br>
            <span align="center">Create new user</span>
            <h3 id="eerror" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <h3 id="nerror" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2>
            <h3 id="msg" style="width: 100%;background-color:#f8c291;color: white;text-align: center;"></h2> -->
                

            
              
        </div>

        
    </div>

</body>
</html>
<script>
    function live() {
        let words = document.getElementById('words').value;
        let http = new XMLHttpRequest();
                    http.open('POST', '../../../controllers/adminControllers/excecutiveControllers/searchdeal.php', true);
                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    http.send("word1="+words);
                    http.onreadystatechange = function()
                    {
                        
                        if(this.readyState == 4 && this.status == 200)
                        {
                            console.log(this.responseText);
                            var data =  JSON.parse(this.responseText);
                            //console.log(data);
                            var html = " ";
                            for (var i = 0; i<data.length;i++) {
                                var farmerusername = data[i].farmerusername;
                                var retailerusername = data[i].retailerusername;
                                var pn = data[i].pn;
                                var discription = data[i].discription;
                                var amount = data[i].amount;
                                var qntty = data[i].qntty;

                                var date = data[i].date;
                                /*console.log(insertdata);
                                console.log(link);*/


                                html+= "<tr>";
                                    html+= "<td><input type='username' value='"
                                    +farmerusername+
                                            "'></td>";
                                            html+= "<td><input type='username' value='"
                                    +retailerusername+
                                            "'></td>";
                                            html+= "<td><input type='text' value='"
                                    +pn+
                                            "'></td>";
                                            html+= "<td><input type='text' value='"
                                    +discription+
                                            "'></td>";
                                            html+= "<td><input type='text' value='"
                                    +qntty+
                                            "'></td>";
                                            html+= "<td><input type='text' value='"
                                    +amount+
                                            "'></td>";
                                            html+= "<td><input type='text' value='"
                                    +date+
                                            "'></td>";
                                           
                                html+= "</tr>";


                            }
                            document.getElementById("database").innerHTML = html;
                            //document.getElementById("ap").color = "red";



                        }
                    }
    }
    
    function getdata()
    {
            /*let farmerusername = document.getElementById('farmerusername');
           */
                    let http = new XMLHttpRequest();
                    http.open('POST', '../../../controllers/adminControllers/excecutiveControllers/getalldealhistory.php', true);
                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    http.send();
                    http.onreadystatechange = function()
                    {
                        
                        if(this.readyState == 4 && this.status == 200)
                        {
                            //console.log(this.responseText);
                            var data =  JSON.parse(this.responseText);
                            //console.log(data);
                            var html = " ";
                            for (var i = 0; i<data.length;i++) {
                                var farmerusername = data[i].farmerusername;
                                var retailerusername = data[i].retailerusername;
                                var pn = data[i].pn;
                                var discription = data[i].discription;
                                var amount = data[i].amount;
                                var qntty = data[i].qntty;

                                var date = data[i].date;
                                /*console.log(insertdata);
                                console.log(link);*/


                                html+= "<tr>";
                                    html+= "<td><input type='username' value='"
                                    +farmerusername+
                                            "'></td>";
                                            html+= "<td><input type='username' value='"
                                    +retailerusername+
                                            "'></td>";
                                            html+= "<td><input type='text' value='"
                                    +pn+
                                            "'></td>";
                                            html+= "<td><input type='text' value='"
                                    +discription+
                                            "'></td>";
                                            html+= "<td><input type='text' value='"
                                    +qntty+
                                            "'></td>";
                                            html+= "<td><input type='text' value='"
                                    +amount+
                                            "'></td>";
                                            html+= "<td><input type='text' value='"
                                    +date+
                                            "'></td>";
                                           
                                html+= "</tr>";


                            }
                            document.getElementById("database").innerHTML = html;
                            //document.getElementById("ap").color = "red";



                        }
                    }
    }

</script>