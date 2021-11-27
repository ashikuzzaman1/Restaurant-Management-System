<?php
include("connection.php");
error_reporting(0);  
$query = "SELECT * FROM softdrink";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
?>

	<table border="1" style="width:100%" >
		<tr>
			<th>ID</th>
			<th>DrinkName</th>
			<th>Price</th>
			<th>Operations</th>
		</tr>



<?php
if($total != 0){
	while($result = mysqli_fetch_assoc($data)){
		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['drinkname']."</td>
				<td>".$result['price']."</td>
				<td><a href='cdrink.php?id=$result[id]&drinkname=$result[drinkname]&price=$result[price]'>Order</a></td>
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
	<title>Show Softdrink</title>
</head>
<body style="background-color:coral;">
	<br />
	<a href="../index.html">Back</a>
</body>
</html>