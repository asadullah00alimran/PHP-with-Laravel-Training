<?php 
	session_start();
	if (!isset($_SESSION["user"])) {
		header("location: login.php");
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
	<h1>Dashboard</h1>

	<div class="manu">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Product Insert</a></li>
			<li><a href="#">Product View</a></li>
			<?php 
				if($_SESSION["role"] == "vendor"){ ?>
					<li><a href="#">Product Edit</a></li>
					<li><a href="#">Purchas</a></li>
				<?php } 
				if($_SESSION["role"] == "admin"){ ?>
					<li><a href="#">Product Edit</a></li>
					<li><a href="#">Purchas</a></li>
					<li><a href="#">Profit</a></li>
					<li><a href="userlist.php">User</a></li>
				<?php } 

			?>
			<li><a href="logout.php">Logout</a></li>
			
		</ul>
	</div>

</body>
</html>