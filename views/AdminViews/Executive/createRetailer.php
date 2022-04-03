<?php 
    require('header.php');
    require('../../../models/Retailer_info.php');
    $pendinguser = getpendinguser();
    $user = getuser();
?>
<!DOCTYPE html>
<html>
<!-- center table creation -->
<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
                <!-- center menubar -->
                <tr style ="font-size:20px;">
                    <td><a href="Home.php">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../../controllers/adminControllers/excecutiveControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <td width =10%; valign = top; style ="background-color:#C1BCBC; font-size:20px;">
            <a href="listOfuser.php">user Account</a><br><br>
            <a href="verifyDocument.php">verfiy ducument</a><br><br>
            <a href="controlDeaL.php">control deal</a><br><br>
            <a href="approvePost.php">Approve post</a><br><br>
            <a href="EditProfile.php">Edit profile</a><br><br>
        </td>
        <!-- output of user -->
        <td valign = top style ="background-color:#F5F2F1 ">

            <h3 align = center>retailer user pending list</h3>
            <table border="1px">
                <tr>
                    <td>Name</td>
                    <td>username</td>
                    <td>password</td>
                    <td>NID Number</td>
                    <td>Email</td>
                    <td>Phone number</td>
                    <td>Gender</td>
                    <td>Trade License Number</td>
                    <td>photo</td>
                    <td>Status</td>
                </tr>
                <?php
                if ($pendinguser!=null) {
                    foreach($pendinguser as $pendinguser)
                    {


                ?>
                <tr>
                    <form method="POST" action="../../../controllers/adminControllers/excecutiveControllers/retailercreateAccount.php">
                        <td><input type="name" name="name" value="<?=$pendinguser['0']?>"></td>
                        <td><input type="username" name="username" value="<?=$pendinguser['1']?>"></td>
                        <td><input type="password" name="password" value="<?=$pendinguser['2']?>"></td>
                        <td><input type="number" name="nidNumber" value="<?=$pendinguser['3']?>"></td>
                        <td><input type="email" name="email" value="<?=$pendinguser['4']?>"></td>
                        <td><input type="number" name="phoneNumber" value="<?=$pendinguser['5']?>"></td>
                        <td><input type="text" name="gen" value="<?=$pendinguser['6']?>"></td>
                        <td><input type="lnumber" name="licNumber" value="<?=$pendinguser['7']?>"></td>
                        <td>null</td>
                        <td><input type="submit" name="submit" value="submit"></td>
                    </form>
                    
                </tr>
                <?php
                    }
                 }
        ?>
            </table>

            <br>
            <h1 align="center">User list</h1>
            <table border="1px">
                <tr>
                    <td>Name</td>
                    <td>username</td>
                    <!-- <td>password</td>
 -->                    <td>NID Number</td>
                    <td>Email</td>
                    <td>Phone number</td>
                    <td>Gender</td>
                    <td>Trade License Number</td>
                    <td>photo</td>
                </tr>
                <?php
                if ($user!=null) {
                    foreach($user as $user)
                    {


                ?>
                <tr>
                    <td><?=$user['0']?></td>
                    <td><?=$user['1']?></td>
                   <!--  <td><?=$user['2']?></td> -->
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


            <!-- creat new user account  -->
            <h3 align="center">Creat new user</h3><br>
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
                    
                    <!-- <table align="center" > -->
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  <input type="submit" name="submit" value="submit">   
                                  <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                    <!-- </table> -->
                

                </table>
                    
            </form>
            


        </td>
    </tr>
    <!-- footer section -->
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           coppyright @2022
        </td>
    </tr>
</table>


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
</script>