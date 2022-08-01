<?php 

	include "classes/users.php";
	$obj = new User; 
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
				<table>
					<tr>
						<th>Full Name</th>
						<th>User Name</th>
						<th>Email</th>
						<th>Role</th>
						<th>Status</th>
					</tr>
					<?php 

						$result = $obj->user();
						while ($data=$result->fetch_assoc()) {
							echo '<tr>
									<th>'.$data["fName"].'</th>
									<th>'.$data["uName"].'</th>
									<th>'.$data["email"].'</th>
									<th>'.$data["role"].'</th>
									<th>'.$data["status"].'</th>
								</tr>';
						}
					?>
				</table>
			</div>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>