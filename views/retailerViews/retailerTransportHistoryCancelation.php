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
	<tr height = "700px" valign="top" >
		<td >
			<!-- <a href="3.php">Post Request</a><br><br> -->
			<a href="2. type selection.php">Farmer's Post</a><br><br>
			<a href="6. content.php">Banking Content</a><br><br>
			<a href="5. profile.php">Edit Profile</a><br>
		</td>
		<td valign="top"; align="center">
			<h1><u>Cancelation of Trasportation</u></h1><hr> 
			
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  			Reason of cancelation: <textarea id="w3review" name="w3review" rows="4" cols="50">
  </textarea>
 		 	<input type="submit">
			</form>
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
    		// collect value of input field
    		$cancel = htmlspecialchars($_REQUEST['request']);
    		if (empty($cancel)) {
       	 	echo "Name is empty";
    		} else {
        	echo $cancel;
    		}
			}
			?>

		</td>
	</tr>
	<tr height = "100px">
		<td colspan="2" , align="center">@Copyright 2022</td>
	</tr>
</table>
</body>
</html>