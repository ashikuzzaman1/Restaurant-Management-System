<?php
	
	error_reporting(0);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rms";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
 
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Update breakfast</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="" method="GET">
		Id:<br>
		<input type="text" name="id" value="<?php echo $_GET['id']; ?>"><br>
		
		foodname:<br>
		<input type="text" name="foodname" value="<?php echo $_GET['foodname']; ?>"><br>
		
		price:<br>
		<input type="text" name="price" value="<?php echo $_GET['price']; ?>"><br>
		
		<input type="submit" name="submit" value="Update">
		<a href="viewbreakfast.php">Back</a>
	</form>

<?php
	 
	if($_GET['submit'])
	{
		$id = $_GET['id'];
		$foodname = $_GET['foodname'];
		$price = $_GET['price'];

		$query = "UPDATE breakfast SET foodname='$foodname' , price='$price' WHERE id='$id' ";
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
		echo "<font color='blue'> Click on update button to update!";
	}

	 
	 

?>	
<a href="viewbreakfast.php">Check Update!</a>

</body>
</html>