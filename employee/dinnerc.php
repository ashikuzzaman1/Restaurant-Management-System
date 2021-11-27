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
	$foodname = $_POST['foodname'];
	$price = $_POST['price'];
	

	$sql = "INSERT INTO dinner (id,foodname,price)
	VALUES ('$id','$foodname','$price')";

	if ($conn->query($sql) === TRUE) {
		echo "done";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?> 
<a href="profile.php">Back</a>