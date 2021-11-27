<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rms";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$id = $_POST['id'];
	$drinkname = $_POST['drinkname'];
	$price = $_POST['price'];
	

	$sql = "INSERT INTO softdrink (id,drinkname,price)
	VALUES ('$id','$drinkname','$price')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?> 
<a href="profile.php">Back</a>