<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Add Drink Items</title>
</head>
<body style="background-color: coral;";>
	<form action="insertsd.php" method="POST">
		ID:<br>
		<input type="text" name="id" value="" required><br>
		FoodName:<br>
		<input type="text" name="drinkname" value="" required><br>
		Price:<br>
		<input type="text" name="price" value="" required><br><br />
		<input type="submit" value="Submit">
	</form>
	<br /><a href="foods.php">Back</a>
</body>
</html>