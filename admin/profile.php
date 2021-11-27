<?php
session_start();
error_reporting(0);

	$userprofile = $_SESSION['user_name'];
	
	if($userprofile==true)
	{
		
	}	
	else
	{
		header('location:login.php');
	}
	
	$sql = "SELECT * FORM admin WHERE username='$userprofile'";
	$data = mysqli_query($conn, $sql);
	$total = mysqli_num_rows($data);
	$result = mysqli_fetch_assoc($data);
	echo  "".$result['username'];
	




?>




<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Admin</title>
</head>
<body style="background-color: #684549;";>
	<center style="background-color: coral; height:150px; width:1240px">
	<h1>Welcome Admin!</h1>
	<a href="addemployee.php" style="color:blue;font-size:25px;margin-right:20px;">Add Employees</a>
	<a href="viewemployees.php" style="color:blue;font-size:25px;margin-right:20px;">View All Employees</a>
	<a href="addcustomer.php" style="color:blue;font-size:25px;margin-right:20px;">Add Customers</a>
	<a href="viewcustomers.php" style="color:blue;font-size:25px;margin-right:20px;">View All Customers</a>
	<a href="adddelivery.php" style="color:blue;font-size:25px;margin-right:20px;">Add Delivery Boys</a>
	<a href="viewdeliveries.php" style="color:blue;font-size:25px;margin-right:20px;">View All Delivery Boys</a>
	<a href="viewcustomerquery.php" style="color:blue;font-size:25px;margin-right:20px;">View Customers Query</a>
	<a href="viewborder.php" style="color:blue;font-size:25px;margin-right:20px;">View Breakfast Order</a>
	<a href="viewlorder.php" style="color:blue;font-size:25px;margin-right:20px;">View Lunch Order</a>
	<a href="viewdorder.php" style="color:blue;font-size:25px;margin-right:20px;">View Dinner Order</a>
	<a href="viewsdorder.php" style="color:blue;font-size:25px;margin-right:20px;">View Softdrink Order</a>
	<a href="foods/foods.php" style="color:blue;font-size:25px;margin-right:20px;">Foods Details</a>
	<a href="logout.php" style="color:blue;font-size:25px;margin-right:20px;">Logout</a>
	</center>
</body>
</html>