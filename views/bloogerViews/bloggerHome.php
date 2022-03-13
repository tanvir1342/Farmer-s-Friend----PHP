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
                    <td><a href="bloggerHome.php">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="#"> Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
           <img src="ProfileImage.jpg" width="200px" height="200px"><br>
           <h2>Rahat Anjum Atto</h2><br>
           <p>Blogger</p>
           <p>Age: 25</p>
           <p>Gender: Male</p>
           <a href="EditAccount.php">Edit Profile</a>
       </td>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Welcome, Atto</h1><hr>
            <table  align="center" width="500px" >
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="WritePost.php">Write a Post</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="ReadPost.php">Read Posts</a></td>
                </tr>
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="PublishResearchPaper.php">Research Paper</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="EditAccount.php">Edit Profile</a></td>
                </tr>
                
                </tr>
            </table>
            


        </td>
    </tr>
    <!-- Footer Part -->
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights @2022 Reserved by Gallant ltd.
        </td>
    </tr>
</table>


</html>