<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Stroe</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    
    
    
</head>

<body style="background:url(customer/backgnd.png);">

<div class="" style="margin: 150px auto ;margin-left: 45%">
	<img src="customer/download.png" class="avatar">
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
		<input type="submit" name="login_user" value="Login">
		</div>
		
		<a href="#">Forgotten password?</a>

	</form>

</div> 




</body>
</html>

