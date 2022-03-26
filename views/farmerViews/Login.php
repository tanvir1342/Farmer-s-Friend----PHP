<?php
$msg = "";
if(isset($_GET['msg']))
{
    if($_GET['msg'] == "success")
    {
        $msg = "Registration successfull";
    }
    if($_GET['msg'] == "error")
    {
        $msg = "invalid username or password";
    }
}

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
                    <td><a href="../../index.php">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../controllers/farmerControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <!-- output of user -->
        <td colspan="3" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Login Form</h1><hr>
            <h1 align = center><?=$msg?></h1>
        <form method="POST" action="../../controllers/farmerControllers/logincheck.php">
              <table align="center">
                <tr>
                    <td>Username: </td>
                    <td><input type="username" name="username" placeholder="Enter your Username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="Enter your Password"></td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Login"></td>
                 
                </tr>
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