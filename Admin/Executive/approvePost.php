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
                    <td><a href="#">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="#"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <td width =10%; valign = top; style ="background-color:#C1BCBC; font-size:20px;">
            <a href="createAccount.php">create Account</a><br><br>
            <a href="#">Edit Account</a><br><br>
            <a href="#">Approve post</a><br><br>
            <a href="#">Approve paper</a><br><br>
            <a href="#">control deal</a><br><br>
        </td>
        <!-- output of user -->
        <td valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Approve Blooger post</h1><hr>
            <h3>Blogger name:Tanvir</h3>
            <textarea id="post" name="bloogerPost" rows="12" cols="180"></textarea><br>
            <a href="#">Approve |</a>
            <a href="#">reject</a>
            <br>
            <h3>Blogger name:Soikot</h3>
            <textarea id="post" name="bloogerPost" rows="12" cols="180"></textarea><br>
            <a href="#">Approve |</a>
            <a href="#">reject</a>


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