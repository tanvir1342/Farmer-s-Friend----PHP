<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table width="100%"; border="1px">
	<tr height = "100px">
		<td width="10%" align="center">
			<img  width="80px"; height="80px"; src="logo.png";  >
		</td>
		<td align="right">
			<a href="a">Home | </a>
			<a href="a">About Us | </a>
			<a href="a">Log Out</a>
		</td>
	</tr>
	<tr height = "500px" valign="top" >
		<td >
			<!-- <a href="3.php">Post Request</a><br><br> -->
			<a href="2. type selection.php">Type Select</a><br><br>
			<a href="6. content.php">Content</a><br><br>
			<a href="5. profile.php">Edit Profile</a><br>
		</td>
		<td valign="top"; align="center"><h1><u>Welcome to Your Profile (Economic)</u></h1><hr>
		<form>
	<table border="1" align="center">
		<tr align="center" height="100px">
			<th colspan="2" width="400px">
				Person Profile
			</th>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value=""></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="email" name="email" value="">
			</td>
		</tr><tr>
			<td>Phone Number</td>
			<td>
				<input type="phone" name="phone" value="">
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gen" > Male
				<input type="radio" name="gen" > Femal
				<input type="radio" name="gen" > Other
			</td>
		</tr>
		<tr>
			<td>DATE OF BIRTH</td>
			<td>
				<input type="date" name="dob" > 
			</td>
		</tr>
		<tr>
			<td>Blood Group</td>
			<td>
				<select>
					<option>O+</option>
					<option>O-</option>
					<option>A+</option>
					<option>A-</option>
					<option>AB+</option>
					<option>AB-</option>
					<option>B+</option>
					<option>B-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Degree
			</td>
			<td>
				<input type="checkbox" name="" >SSC
				<input type="checkbox" name="" >HSC
				<input type="checkbox" name="" >BSc.
				<input type="checkbox" name="" >MSc.
			</td>
		</tr>
		<tr>
			<td>Photo</td>
			<td>
				<input type="file" name="">
			</td>
		</tr>
		<tr height ="20">
			<td colspan="2"></td>
		</tr>
		<tr align="left">
			<td >
				<input type="submit" name="submit" value="Submit">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>

	</table>
</form> </td>

	</tr>

	<tr height = "100px">
		<td colspan="2" , align="center">@Copyright 2022</td>
	</tr>
</table>
</body>
</html>