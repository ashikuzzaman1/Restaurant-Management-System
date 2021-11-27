<?php
include("connection.php");
error_reporting(0);  
$query = "SELECT * FROM customers";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
?>

	<table border="1" style="width:100%" >
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Email</th>
			<th>ContactNO</th>
			<th>Address</th>
			<th>Image</th>
			<th colspan="2">Operations</th>
		</tr>



<?php
if($total != 0){
	while($result = mysqli_fetch_assoc($data)){
		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['username']."</td>
				<td>".$result['email']."</td>
				<td>".$result['contactno']."</td>
				<td>".$result['address']."</td>
				<td><a href='$result[picsource]'><img src='".$result['picsource']."' height='100' width='100' /></a></td>
				<td><a href='updatecustomers.php?id=$result[id]&username=$result[username]&email=$result[email]&contactno=$result[contactno]&address=$result[address]'>Edit</a></td>
				<td><a href='deletecustomers.php?id=$result[id]' onclick=' return checkdelete()'>Delete</a></td>
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
		return confirm('Are you sure you want to delete this data?');
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