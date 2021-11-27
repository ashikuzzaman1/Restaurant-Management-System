<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Order Softdrink Items!</title>
</head>
<body>
	<form action="" method="GET">
		ID:<br>
		<input type="text" name="id" value="<?php echo $_GET['id']; ?>"><br>
		
		DrinkName:<br>
		<input type="text" name="drinkname" value="<?php echo $_GET['drinkname']; ?>"><br>
		
		Price:<br>
		<input type="text" name="price" value="<?php echo $_GET['price']; ?>"><br>
		
		Customer ID:<br>
		<input type="text" name="customerid" value="" placeholder="Enter Your ID No."><br>
		
		<input type="submit" name="submit" value="Order">
	</form>

<?php
	 
	if($_GET[ 'submit'])
	{
		$id = $_GET['id'];
		$drinkname = $_GET['drinkname'];
		$price = $_GET['price'];
		$customerid = $_GET['customerid'];
		$query = "INSERT INTO orderdrink (id,drinkname,price,customerid)
					VALUES ('$id','$drinkname','$price','$customerid')";
		$data = mysqli_query($conn, $query);
		if($data)
		{
			echo "<font color='green'>Order Confirm Successfully.";
		}
		else
		{
			echo "<font color='red'> Order Not Complete!";
		
		}
	}
	else
	{
		echo "<font color='blue'> Click on order button to confirm the order!";
	}

	 
	 

?>	
<a href="showbreakfast.php">Order Another Food!</a>

</body>
</html>