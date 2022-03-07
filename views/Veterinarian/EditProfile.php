
<html>
<head>
	<title>Veterinarian</title>
</head>
<body>

<table border="1" width="100%">
	<tr height="100px">
		<td width="10%">Logo</td>
		<td align="right">
			<a href="homepage.php">Home</a>
			<a href="0">| About Us</a>
			<a href="0">| Logout</a>
		</td>
		

	</tr>
	<tr height="700px"> 
		<td width="10%" valign="top" align="center">
		<a href="EditProfile.php">Edit Profile</a><br><br>
		<a href="MakeSchedule.php">Farmer Requests</a><br><br>
		<a href="CheckHistory.php">Check History</a><br><br>
		
		</td>
		<td valign="top">
			<h1 align="center">Veterinarian</h1><hr>
			<form>
		
		<table border="1" width="100%">
			<tr align="center">
				<td colspan="3"><h1>Edit Profile<h1></td>
			</tr>
			<form>
		
		
			<tr>
				<td>Name:</td>
				<td><input type="Name" name="name" value=""></td>
				<td></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="Email" name="Email" value=""></td>
				<td></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
					<input type="radio" name="gender" value=""> Male
					<input type="radio" name="gender" value="" >Female
					<input type="radio" name="gender" value=""> Other
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Date of birth:</td>
				<td><input type="date" name="DOB" value=""></td>
				<td></td>
			</tr>
			<tr>
				<td>Blood group:</td>
				<td>
					<select name="Blood group">
						<option value="">A+</option>
						<option value="">B+</option>
						<option value="">O+</option>
						<option value="">AB+</option>
					</select>
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Degree:</td>
				<td>
					<input type="checkbox" name="" value="">SSC
					<input type="checkbox" name="" value="">HSC
					<input type="checkbox" name="" value="">BSc
					<input type="checkbox" name="" value="">MSc
					<input type="checkbox" name="" value="">BBA
					<input type="checkbox" name="" value="">MBA
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Photo:</td>
				<td colspan="2"><input type="file" name="image" value=""></td>
				
			</tr>
			<tr>
				<td colspan="3"></td>
			</tr>
			<tr align="right">
				<td colspan="3">
					<input type="submit" name="submit" value="Confirm">
                    <input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
					</table>
			






		</td>
		

	</tr>
	<tr height="50px" align="center">
		<td colspan="3"> Copyright@2022</td>
		

	</tr>



</table>

</body>



</html>