<?php
include("connection.php");
error_reporting(0); 


 
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Order Dinner Items!</title>
</head>
<body>
	<form action="" method="GET">
		ID:<br>
		<input type="text" name="id" value="<?php echo $_GET['id']; ?>"><br>
		
		FoodName:<br>
		<input type="text" name="foodname" value="<?php echo $_GET['foodname']; ?>"><br>
		
		Price:<br>
		<input type="text" name="price" value="<?php echo $_GET['price']; ?>"><br>
		
		Customer ID:<br>
		<input type="text" name="customerid" value="" placeholder="Enter Your ID No."><br>
		
		<input type="submit" name="submit" value="Update">
	</form>

<?php
	 
	if($_GET[ 'submit'])
	{
		$id = $_GET['id'];
		$foodname = $_GET['foodname'];
		$price = $_GET['price'];
		$customerid = $_GET['customerid'];
		$query = "INSERT INTO orderdinner (id,foodname,price,customerid)
					VALUES ('$id','$foodname','$price','$customerid')";
		$data = mysqli_query($conn, $query);
		if($data)
		{
			echo "<font color='green'>Record Updeted Successfully.";
		}
		else
		{
			echo "<font color='red'> Record Not Update";
		
		}
	}
	else
	{
		echo "<font color='blue'> Click on update button to save the change!";
	}

	 
	 

?>	
<a href="viewdinner.php">Check Update Here</a>

</body>
</html>