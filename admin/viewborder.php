<?php
include("connection.php");
error_reporting(0);  
$query = "SELECT * FROM orderbreakfast";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
?>

	<table border="1" style="width:100%" >
		<tr>
			<th>ID</th>
			<th>Foodname</th>
			<th>Price</th>
			<th>CustomersID</th>
			<th colspan="2">Operations</th>
		</tr>



<?php
if($total != 0){
	while($result = mysqli_fetch_assoc($data)){
		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['foodname']."</td>
				<td>".$result['price']."</td>
				<td>".$result['customerid']."</td>
				<td><a href='updatecustomers.php?id=$result[id]&username=$result[username]&email=$result[email]&contactno=$result[contactno]&address=$result[address]'>Confirm Order</a></td>
				<td><a href='cancelb.php?id=$result[id]' onclick=' return checkdelete()'>Cancel</a></td>
			</tr>";
		
	}
}else{
	echo "No record found";
}


?>
</table>

<script>
	function checkdelete()
	{
		return confirm('Are you sure you want to Cancel this order?');
	}

</script><!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>All Customers View</title>
</head>
<body style="background-color: coral;";>
	<br />
	<a href="profile.php">Back</a>
</body>
</html>