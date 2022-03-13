<!DOCTYPE html>
<html>
<!-- Table creation -->
<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
                <!-- center menubar -->
                <tr style ="font-size:20px;">
					<a href="bloggerHome.php">Home</a>
					<a href="0">| About Us</a>
					<a href="0">| Logout</a>
                </tr>
            </table>
        </td>
    </tr>
     <!-- Dashboard of Blogger -->
   <tr  height = 700px>
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">

		<a href="EditAccount.php">Edit Account</a><br><br>
		<a href="WritePost.php">Write a Post</a><br><br>
		<a href="ReadPost.php">Read Posts</a><br><br>
		<a href="PublishResearchPaper.php">Research Paper</a><br><br>

        </td>
        <!-- Output -->
        <td valign="top">
            <h1 align="center"> Create Account For Blogger </h1> <hr>
            <table border="1" align="center">
            <form method="POST">
               <table align="center" style="font-size:20px;">
                    <tr>
                        <td>Name:</td>
                        <td width="300px "><input type="name" name="name" value=""></td>
                        <td>Email:</td>
                        <td><input type="email" name="email" value=""></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input type="name" name="name" value=""></td>
                        <td>ID:</td>
                        <td><input type="email" name="email" value=""></td>
                    </tr>

                    <tr>
                        <td>Phone Number:</td>
                        <td width="300px "><input type="number" name="phoneNumber" value=""></td>
                        <td>Photo:</td>
                        <td><input type="file" name=""></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Gender:</td>
                        <td width="300px "><input type="radio" name="gen" > Male <input type="radio" name="gen" > Female <input type="radio" name="gen" > Other </td>
                                          
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td width="300px "><input type="name" name="name" value=""></td>
                        <td>Confirm Password:</td>
                        <td><input type="email" name="email" value=""></td>
                    </tr> 
                    
                    <!-- <table align="center" > -->
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  <input type="submit" name="submit" value="Submit">   
                                  <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                    <!-- </table> -->
                

                </table>
                    
            </form> 
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