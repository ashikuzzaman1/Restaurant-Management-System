<?php
include("connection.php");
$id = $_GET['id'];
$query = "DELETE FROM breakfast where id='$id'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
?>
	<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/rms/Admin/foods/viewbreakfast.php">



<?php	
}
else
{
	echo "<font color='red'> Sorry,Delete Process Failed";
}
?>