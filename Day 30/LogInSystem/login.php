<?php 

	include "classes/users.php";
	$obj = new User; 
	session_start();
	if (isset($_SESSION["user"])) {
		header("location: dashboard.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">

			<div class="col-md-6 offset-md-3 bordered mt-5">
				<!-- <div class="alert alert-success">Registration Successfull</div> -->
				<?php 
					if (isset($_POST['submit'])) {
						$obj->login($_POST);
					}
				?>
				<form method="POST">
				<div class="form-group mt-3">
					<label for="uName">User Name/Email </label>
					<input class="form-control" type="text" name="uName" id="uName" placeholder="Enter Your User Name">
				</div>
				<div class="form-group mt-3">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password" id="password" placeholder="Enter Your Password">
				</div>
				<input class="my-3 btn btn-success form-control" type="submit" name="submit" value="Login">
				<label>New Member?<a href="register.php">Register Here</a></label>
			</div>
			</form>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>