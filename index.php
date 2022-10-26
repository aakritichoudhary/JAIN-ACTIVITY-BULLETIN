<?php

session_start();

	include("connections.php");
	include("functions.php");

	$user_data= check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>my website</title>
</head>
<body>
	<a href="logout.php">logout<a>
	<h1>index page</h1>

	<br>
	hello <?php echo $user_data['user_name'];?>
</body>
</html>