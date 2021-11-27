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
	
	$customerid = $_POST['customerid'];
	$query = $_POST['query'];
	$sql = "INSERT INTO customerquery (customerid,query)
	VALUES ('$customerid','$query')";

	if ($conn->query($sql) === TRUE) {
		echo "Your Query Send successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Query Send</title>
</head>
<body style="background-color:coral;">
	<br />
	<a href="contact.php">back</a>
</body>
</html>