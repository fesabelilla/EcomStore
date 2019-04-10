<?php


?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>

<div class="loginbox">
	<img src="download.png" class="avatar">
	<h1> Login Here</h1>
	<form action="Process.php" method="POST">
		<div>
		<p>User Name</p>
		<input type="text" placeholder="Enter Username"  name="customer_name" required>
		</div>
		<div>
		<p>Password</p>
		<input type="password"  placeholder="Enter Your Password" name="customer_pass" required>
		</div>
		<div>
		<input type="submit" name="" value="Login">
		</div>
		
		<a href="#">Forgotten password?</a>

	</form>

</div> 




</body>
</html>

