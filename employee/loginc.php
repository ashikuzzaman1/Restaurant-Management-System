<?php

	session_start();
	$conn = mysqli_connect("localhost", "root", "", "rms");
	
	if(!$conn){
		echo("Error connection:".mysqli_connect_error());
	}
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
	$sql = "Select * from employees where username = '$username' and password = '$password'";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);
	
	if($count == 1){
		echo "welcome!!";
		$_SESSION['user_name']=$username;
		header('location:profile.php');
		
	}else{
		echo "invalid input";
	}

}


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<ul>
		<li><a href="login.php">LogIN</a></li>

	</ul> 
</body>
</html>