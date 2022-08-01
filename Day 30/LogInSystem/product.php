<?php 
	
	session_start();
	if (!isset($_SESSION["user"])) {
		header("location: login.php");
	}
	elseif($_SESSION["role"] !="admin"){
		header("location: dashboard.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<h1>Product Page</h1>
	
</body>
</html>