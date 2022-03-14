<?php 
    require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table width="100%"; border="1px">
	<tr height = 100px style ="background-color:#C1BCBC ">
		<td width="10%" align="center">
			<img  width="80px"; height="80px"; src="logo.png";  >
		</td>
		<td align="right">
			<a href="a">Home | </a>
			<a href="a">About Us | </a>
			<a href="../../controllers/retailerControllers/logout.php">Log Out</a>
		</td>
	</tr>
	<tr height = "700px" valign="top" >
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
            <a href="retailerEditAccount.php"> Edit Account </a><br><br> 
            <a href="retailerUpdatePrice.php"> Update & Post Latest Prices </a><br><br>
            <a href="dealWithFarmer.php"> Deal With Farmers </a><br><br>
            <a href="retailerTransportHistory.php"> Transport Products </a><br><br>
            <a href="retailerDealHistory.php"> Deal History </a><br><br>
            <a href="govTax.php"> Payment For Tax </a><br><br>
            <a href="makePayment.php"> Payment For Any Issue </a><br><br>        
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

<<<<<<< HEAD
<!-- 
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
echo $time; -->

=======
 <?php
   echo "Here is your output \r\n";
   echo $name;
   echo  $TypeOfProduct;
   echo $from;
   echo $to;
   echo $productDetails;
   echo  $date;

 ?> 
>>>>>>> f1070af0b716af396f5b8e55468188d00e60af70

		 </td>
	 <!-- Footer Part -->
   <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights Reserve by Gallant ltd.
        </td>
    </tr>
</table>
</body>
</html>