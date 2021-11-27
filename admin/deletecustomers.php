<?php
include("connection.php");
$id = $_GET['id'];
$query = "DELETE FROM customers where id='$id'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
?>
	<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/rms/admin/viewcustomers.php">



<?php	
}
else
{
	echo "<font color='red'> Sorry,Delete Process Failed";
}
?>