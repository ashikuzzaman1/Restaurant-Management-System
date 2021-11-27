<?php
error_reporting(0);  
?>
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
	$address = $_POST['address'];

	$sql = "INSERT INTO customers (id,username,email,password,contactno,address)
	VALUES ('$id','$username','$email','$password','$contactno','$address')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>

<?php
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "images/".$filename;
move_uploaded_file($tempname,$folder);
echo "<img src='$folder' height='100' width='100' alt='Picture' />";

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Customer Added</title>
</head>
<body style="background-color:coral;">
	<br />
	<a href="profile.php">back</a>
</body>
</html>

