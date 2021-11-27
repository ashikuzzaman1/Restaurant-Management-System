<?php
include("connection.php");
error_reporting(0);  
$query = "SELECT * FROM breakfast";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
?>

	<table border="1" style="width:100%" >
		<tr>
			<th>ID</th>
			<th>FoodName</th>
			<th>Price</th>
			<th colspan="2">Operations</th>
		</tr>



<?php
if($total != 0){
	while($result = mysqli_fetch_assoc($data)){
		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['foodname']."</td>
				<td>".$result['price']."</td>
				<td><a href='updatebreakfast.php?id=$result[id]&foodname=$result[foodname]&price=$result[price]'>Edit</a></td>
				<td><a href='deletebreakfast.php?id=$result[id]' onclick=' return checkdelete()'>Delete</a></td>
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
</script>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Breakfast Items</title>
</head>
<body style="background-color:coral;">
	<br />
	<a href="foods.php">Back</a>
</body>
</html>