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
			<a href="2. type selection.php">Type Select</a><br><br>
			<a href="6. content.php">Content</a><br><br>
			<a href="5. profile.php">Edit Profile</a><br>
		</td>
		<td valign="top"; align="center"><h1><u>Welcome To The Retailer Board</u></h1><hr>
			<?php
// define variables and set to empty values
$nameErr = $emailErr = $typeErr = $fromErr = $toErr = "";
$name = $email = $TypeOfFarmer = $comment = $from = $to = $time = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
    
  if (empty($_POST["from"])) {
    $fromErr = "";
  } else {
    $from = test_input($_POST["from"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$from)) 
    {
      $fromErr = "Invalid ";
    }
  }
    
  if (empty($_POST["to"])) {
    $toErr = "";
  } else {
    $to = test_input($_POST["to"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$to)) 
    {
      $toErr = "Invalid ";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["TypeOfFarmer"])) {
    $typeErr = "Type is required";
  } else {
    $TypeOfFarmer = test_input($_POST["TypeOfFarmer"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2> Fill The Form (* required field)</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Type Of Product:
  <input type="radio" name="TypeOfFarmer" <?php if (isset($TypeOfFarmer) && $TypeOfFarmer=="Plantation") echo "checked";?> value="Plantation">Plantation
  <input type="radio" name="TypeOfFarmer" <?php if (isset($TypeOfFarmer) && $TypeOfFarmer=="Husbandry") echo "checked";?> value="Husbandry">Husbandry
  <input type="radio" name="TypeOfFarmer" <?php if (isset($TypeOfFarmer) && $TypeOfFarmer=="Fisheries") echo "checked";?> value="Fisheries">Fisheries
  <input type="radio" name="TypeOfFarmer" <?php if (isset($TypeOfFarmer) && $TypeOfFarmer=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $typeErr;?></span>
  <br><br>
  From: <input type="text" name="from" value="<?php echo $from;?>">
   <span class="error"><?php echo $fromErr;?></span>
   <br><br>
  To: <input type="text" name="to" value="<?php echo $to;?>">
  <span class="error"><?php echo $toErr;?></span>
  <br><br>
  Product Details: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
 
  <label for="DD">Delivery Date:</label>
  <input type="date" id="" name="delivery">
  <br><br>

  <input type="submit" name="submit" value="Submit">

</form>

 <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $from;
echo "<br>";
echo $to;
echo "<br>";
echo $comment;
echo "<br>";
echo $TypeOfFarmer;
echo "<br>";
echo $time;
?> 

		 </td>
	</tr>
	<tr height = "100px">
		<td colspan="2" , align="center">@Copyright 2022</td>
	</tr>
</table>
</body>
</html>