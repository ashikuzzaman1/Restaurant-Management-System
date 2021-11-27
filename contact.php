<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>COntact Us</title>
</head>
<body style="background-color:coral;">
	<h1>Restaurant Management System</h1>
	<p>Contact Us:</p><br />
	<p>Mobile NO:+8801700000000</p>
	<p>Address:Dhaka,Bangladesh</p>
	
	<form action="insertquery.php" method="POST">
		<table border="0">
			<p>If you have any query?</p>
			<tr>
				<td>CustomerID: </td>
				<td><input type="text" name="customerid" placeholder="Enter your CustomerID" required;/></td>
			</tr>
			<tr>
				<td>Query Write Here: </td>
					<td><input type="text" name="query" placeholder="Enter your Query" required;/></td>
			</tr>
			<tr>
				<td>
					<button type="submit" name="submit" value="submit">Submit</button>
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>