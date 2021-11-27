<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rms";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$query = "SELECT * FROM breakfast";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
?>
    <link rel="stylesheet" href="style.css">
	<table align=center border="2" style="width:100%" >
	    <tr>
            <td align=center colspan='5'> <h3> Breakfast </h3> </td>
        </tr>
		<tr>
			<th>ID</th>
			<th>foodname</th>
			<th>price</th>
			<th colspan="2">More</th>
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
		return confirm('press ok to delete');
	}
</script>



<a href="profile.php">Back</a>