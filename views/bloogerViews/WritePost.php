<?php 
    require('header.php');
?>
<html>
<head>
	<title>Blogger</title>
</head>
<body>

<table border="1" width="100%">
	<tr height="100px" style="background-color:#C1BCBC">
		<td width="10%" align="center">
			<img width="100px" height="100px" src="logo.png">
		</td>
		<td align="right">
			<a href="bloggerHome.php">Home</a>
			<a href="0">| About Us</a>
			<a href="../../controllers/bloggerControllers/logout.php">">| Logout</a>
		</td>
		

	</tr>
	<tr height="700px"> 
		<td width="10%" valign="top" align="center" bgcolor="C1BCBC">
		
		<a href="EditAccount.php">Edit Account</a><br><br>
		<a href="WritePost.php">Write a Post</a><br><br>
		<a href="ReadPost.php">Read Posts</a><br><br>
		<a href="PublishResearchPaper.php">Research Paper</a><br><br>
		
		</td>
		<td valign="top">
			<h1 align="center">Write content about farming</h1><hr>
			<form method="POST" action="../../controllers/bloggerControllers/BloggerPostPendingCheck.php">

			<label>Username:</label><br>
			<input type="username" name="username"><br>
			<label>Blogger Name:</label><br>
			<input type="blogger_name" name="blogger_name"><br>
			<label>Status:</label><br>
			<input type="status" name="status"><br>


			<label for="fname"><b>Write a Post:</b></label><br>
			<textarea name="post" rows="8" cols="100">
				
			</textarea><hr>
			
			
				<input type="submit" name="submit" value="Post">   
                <input type="reset" name="reset" value="Cancel">

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