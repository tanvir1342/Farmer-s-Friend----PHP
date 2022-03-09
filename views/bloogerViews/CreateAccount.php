
<html>
<head>
	<title>Blogger</title>
</head>
<body>

<table border="1" width="100%">
	<tr height="100px">
		<td width="10%">Logo</td>
		<td align="right">
			<a href="bloggerHome.php">Home</a>
			<a href="0">| About Us</a>
			<a href="0">| Logout</a>
		</td>
		

	</tr>
	<tr height="700px"> 
		<td width="10%" valign="top" align="center">
		<a href="#">Create Account</a><br><br>
		<a href="#">Edit Account</a><br><br>
		<a href="#">Write a Post</a><br><br>
		<a href="#">Share Link</a><br><br>
		
		</td>
		<td valign="top">
			<h1 align="center">Sign Up</h1><hr>
			<form action="action_page.php" style="border:1px solid">
<div class="container">

<p>Please fill in this form to create an account.</p>
<hr>

<label for="username"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="username" required><br>

<label for="gender"><b>Gender</b></label>
			<input type="radio" name="gender" value="" required>Male
			<input type="radio" name="gender" value="" required>Female
			<input type="radio" name="gender" value="" required>Other
			<hr>
		


<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>

<label for="psw-repeat"><b>Repeat Password</b></label>
<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

<label>
<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
</label>

<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

<div class="clearfix">
<button type="button" class="cancelbtn">Cancel</button>
<button type="submit" class="signupbtn">Sign Up</button>
</div>
</div>
</form>

			
			






		</td>
		

	</tr>
	<tr height="50px" align="center">
		<td colspan="3"> Copyright@2022</td>
		

	</tr>



</table>

</body>



</html>