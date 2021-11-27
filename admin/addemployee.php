<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Add Employees</title>
<script type="text/javascript">
	function validate(){
		var username = document.getElementById("username");
		var password = document.getElementById("password");
		var contactno = document.getElementById("contactno");
	if(username.value.trim() ==""){
		alert("No Blank username please");
		return false;
	}
	else if(password.value.trim() ==""){
		alert("No Blank Password please");
		return false;
	}
	else if(password.value.trim().length<8){
		alert("Password must be equal or grater than 8");
		return false;
	}
	else if(password.value.trim().length>32){
		alert("Password must be equal less than 32");
		return false;
	}
	else if(contactno.value.trim().length<10){
		alert("contactno must be equal or grater than 10");
		return false;
	}
	else if(contactno.value.trim().length>12){
		alert("contactno must be equal less than 12");
		return false;
	}
	else{
		true;
	}
}


</script>
</head>
<body style="background-color: coral;";>
	<form onsubmit="return validate()" action="addempconfig.php" method="POST">
		ID:<br>
		<input type="text" id="id" name="id" value="" placeholder="Enter ID" required;><br>
		Username:<br>
		<input type="text" id="username" name="username" value="" placeholder="Enter Username" ><br>
		Email:<br>
		<input type="email" id="email" name="email" value="" placeholder="Enter Email" required;><br>
		Password:<br>
		<input type="password" id="password" name="password" value="" placeholder="Enter Password" ><br>
		Contact No:<br>
		<input type="text" id="contactno" name="contactno" value="" placeholder="Enter ContactNO" ><br>	
		<input type="submit" value="Submit">
	</form>
	<br />
	<a href="profile.php">Back</a>
	

</body>
</html>
