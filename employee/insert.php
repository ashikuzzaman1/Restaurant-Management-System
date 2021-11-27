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
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contactno = $_POST['contactno'];

	$sql = "INSERT INTO employees (id,username,email,password,contactno)
	VALUES ('$id','$username','$email','$password','$contactno' )";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully"; 
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
   
	$conn->close();
	
?> <br><br>
<a href="profile.php">Login</a>
<a href="registration.php">Retry</a>