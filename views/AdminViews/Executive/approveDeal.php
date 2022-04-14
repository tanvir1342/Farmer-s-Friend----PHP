<?php 
    require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farmer user list</title>
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
        
           <span>Pending List of deal</span>
          
            <table border="1px" align="center" width="80%" id="userTable">

                <tr>
                    <th>Farmer</th>
                    <th>Retailer</th>
                    <th>PN</th>
                    <th>Discription</th>
                    <th>Quantitiy</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Approve</th>
                    <th>Reject</th>

                   
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
<a href=""></a>
            
              
        </div>

        
    </div>

</body>
</html>
<script>
    function getdata()
    {
            /*let farmerusername = document.getElementById('farmerusername');
            let retailerusername = document.getElementById('retailerusername');
            let pn = document.getElementById('pn');
            let discription = document.getElementById('discription');
            let qntty = document.getElementById('qntty');
            let amount = document.getElementById('amount');
            let date = document.getElementById('date');*/
            let http = new XMLHttpRequest();
                    http.open('POST', '../../../controllers/adminControllers/excecutiveControllers/pendingdealchehck.php', true);
                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    http.send();
                    http.onreadystatechange = function()
                    {
                        
                        if(this.readyState == 4 && this.status == 200)
                        {
                            var data =  JSON.parse(this.responseText)
                            console.log(data);
                            var html ="";
                            for (var i = 0; i<data.length;i++) {
                                var farmerusername = data[i].farmerusername;
                                var retailerusername = data[i].retailerusername;
                                var pn = data[i].pn;
                                var discription = data[i].discription;
                                var amount = data[i].amount;
                                var qntty = data[i].qntty;

                                var date = data[i].date;
                                var link = "approvedata('" +farmerusername+ "','"+retailerusername+"')";
                                //console.log(link);


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
                                           
                                           /*html+= "<td><button style = 'color:white;background-color:green;border:none;'><a style='text-decoration:none;color:white' href="+link+">approve"
                                    
                                            "</a></button></td>";*/
                                            html+= "<td><button style = 'color:white;background-color:red;border:none' onclick ="+link+"> reject"
                                    
                                            "</button></button></td>";
                                html+= "</tr>";


                            }
                            document.getElementById("database").innerHTML = html;
                            //document.getElementById("ap").color = "red";



                        }
                    }
    }

function approvedata(farmerusername,retailerusername) {

/*     console.log(farmerusername);
     console.log(retailerusername);*/
}

    
</script>
