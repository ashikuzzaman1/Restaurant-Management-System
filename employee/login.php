<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>LogIN</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="loginc.php" method="POST">
		Username:<br>
		<input type="text" id="name" name="username" value="" placeholder="Username" required><br>
		Password:<br>
		<input type="password" id="password" name="password" value="" placeholder="Password" required><br>
		<input type="submit" name="submit" value="submit"> <a href="registration.php">sign up</a><br>
		<a href="../index.html">Back To Home</a>
	</form>

</body>
</html>