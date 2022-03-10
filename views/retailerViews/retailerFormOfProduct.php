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
           $name ="";
           $TypeOfProduct= "";
           $from ="";
           $to ="";
           $productDetails ="";
           $date ="";

           if(isset($_POST['submit']))
           {
             $name = $_POST['name'];
             $TypeOfProduct = $_POST['TypeOfProduct'];
             $from =$_POST['from'];
             $to = $_POST['to'];
             $productDetails = $_POST['productDetails'];
             $date =$_POST['time'];
           }

       ?>

<h2> Fill The Form (* required field)</h2>

<form method="post" action="">  
   
   Name: <input type="name" name="name" value="">
  <br><br>
  Type Of Product:
  <input type="radio" name="TypeOfProduct" value="Plantation">Plantation
  <input type="radio" name="TypeOfProduct" value="Husbandry">Husbandry
  <input type="radio" name="TypeOfProduct" value="Fisheries">Fisheries
  <input type="radio" name="TypeOfProduct" value="other">Other
  <br><br>

  From:
  <input type="text" name="from" value="">
  <br><br>
  To: <input type="text" name="to" value="">
  <br><br>
  Product Details: <textarea name="productDetails" rows="5" cols="40"></textarea>
  <br><br>
  <label for="DD">Delivery Date:</label>
  <input type="date" id="" name="time" value="">
  <br><br>

  <input type="submit" name="submit" value="Submit">

</form>
 
 <br>

 <?php
   echo "Here is your output \r\n";
   echo $name;
   echo  $TypeOfProduct;
   echo $from;
   echo $to;
   echo $productDetails;
   echo  $date;

 ?> 

		 </td>
	</tr>
	<tr height = "100px">
		<td colspan="2" , align="center">@Copyright 2022</td>
	</tr>
</table>
</body>
</html>