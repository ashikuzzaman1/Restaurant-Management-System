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
		echo "<script>alert('Record Added Successfuly')</script>";
?>
		<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/rms/admin/foods/viewdrink.php">
		
		
<?php
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>