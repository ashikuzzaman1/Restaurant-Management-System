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
	<title>Update employee</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="" method="GET">
		Id:<br>
		<input type="text" name="id" value="<?php echo $_GET['id']; ?>"><br>
		
		username:<br>
		<input type="text" name="username" value="<?php echo $_GET['username']; ?>"><br>
		
		email:<br>
		<input type="email" name="email" value="<?php echo $_GET['email']; ?>"><br>
		
		contactno:<br>
		<input type="text" name="contactno" value="<?php echo $_GET['contactno']; ?>"><br>
		

		
		<input type="submit" name="submit" value="Update">
	</form>

<?php
	 
	if($_GET['submit'])
	{
		$id = $_GET['id'];
		$username = $_GET['username'];
		$email = $_GET['email'];
		$contactno = $_GET['contactno'];

		$query = "UPDATE employees SET username='$username' , email='$email' , contactno='$contactno' WHERE id='$id' ";
		$data = mysqli_query($conn, $query);
		if($data)
		{
			echo "<font color='green'>Updeted Successfully.";
		}
		else
		{
			echo "<font color='red'>Not Update";
		
		}
	}
	else
	{
		echo "<font color='blue'> Click on update button to update!";
	}

	 
	 

?>	
<a href="employeeinfo.php">Check Update!</a><br>
<a href="employeeinfo.php">Back</a>

</body>
</html>