<?php
include("connection.php");
error_reporting(0); 


 
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Update Soft Drink Items!</title>
</head>
<body style="background-color:coral;">
	<form action="" method="GET">
		ID:<br>
		<input type="text" name="id" value="<?php echo $_GET['id']; ?>"><br>
		
		DrinkName:<br>
		<input type="text" name="drinkname" value="<?php echo $_GET['drinkname']; ?>"><br>
		
		Price:<br>
		<input type="test" name="price" value="<?php echo $_GET['price']; ?>"><br>
		
		<input type="submit" name="submit" value="Update">
	</form>

<?php
	 
	if($_GET[ 'submit'])
	{
		$id = $_GET['id'];
		$drinkname = $_GET['drinkname'];
		$price = $_GET['price'];
		$query = "UPDATE softdrink SET drinkname='$drinkname' , price='$price' WHERE id='$id' ";
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
<a href="viewdrink.php">Check Update Here</a>

</body>
</html>