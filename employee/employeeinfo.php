<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rms";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$query = "SELECT * FROM employees";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
?>
    <link rel="stylesheet" href="style.css">
	<table align=center border="2" style="width:100%" >
	    <tr>
            <td align=center colspan='6'> <h3> eInfo </h3> </td>
        </tr>
		<tr>
			<th>ID</th>
			<th>username</th>
			<th>email</th>
		    <th>contactno</th>	
			<th colspan="2">More</th>
		</tr>



<?php
if($total != 0){
	while($result = mysqli_fetch_assoc($data)){
		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['username']."</td>
				<td>".$result['email']."</td>
				<td>".$result['contactno']."</td>
				<td><a href='updateemployeeinfo.php?id=$result[id]&username=$result[username]&email=$result[email]&contactno=$result[contactno]'>Edit</a></td>
				<td><a href='deleteemployeeinfo.php?id=$result[id]&username=$result[username]&email=$result[email]&contactno=$result[contactno]'>Delete</a></td>
				<td></td>
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