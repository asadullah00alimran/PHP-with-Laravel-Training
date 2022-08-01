<?php 
	include "database.php";
	class User extends Database{

		function registration($data){
			$fName = $data["fName"];
			$uName = $data["uName"];
			$email = $data["email"];
			$password = $data["password"];
			$cpassword = $data["cpassword"];
			$role = "user";
			$status = "0";
			if (empty($fName)) {
				echo '<div class="alert alert-danger">Full Name cant be Empty</div>';
			}
			elseif (empty($uName)) {
				echo '<div class="alert alert-danger">User Name cant be Empty</div>';
			}
			elseif (empty($email)) {
				echo '<div class="alert alert-danger">Email Name cant be Empty</div>';
			}
			elseif (empty($password)) {
				echo '<div class="alert alert-danger">Password cant be Empty</div>';
			}
			elseif (empty($cpassword)) {
				echo '<div class="alert alert-danger">Confirm Password cant be Empty</div>';
			}
			elseif($password != $cpassword){
				echo '<div class="alert alert-danger">Confirm Password Not Match</div>';
			}
			else{
				$check = $this->checkEmailUname($uName,$email);
				if($check==TRUE){
					echo '<div class="alert alert-danger">User Name/Email Already Exits</div>';
				}
				else{
					$password = md5($password);
					$result = $this->con->query("INSERT INTO tbl_users(fName,uName,email,role,password,status)VALUES('$fName','$uName','$email','$role','$password','$status')");
					if ($result) {
						echo '<div class="alert alert-success">Registration Successfull</div>';
					}
					else{
						echo '<div class="alert alert-danger">Found some error</div>';
					}
				}
			}
		}

		// Check Email and User Name for Registration
		function checkEmailUname($uName,$email){
			$result = $this->con->query("SELECT *FROM tbl_users WHERE uName='$uName' OR email='$email'");
			if ($result->num_rows>0) {
				return true;
			}
			else{
				return false;
			}
		}

		function login($data){
			$usernameEmail = $data["uName"];
			$password = $data["password"];
			$password=md5($password);
			$checkuserEmail = $this->checkEmaiUser($usernameEmail);
			$checkpassword = $this->checkPassword($password);
			if ($checkuserEmail ==false) {
				echo '<div class="alert alert-danger">User Name or Email Not Found</div>';
			}
			elseif ($checkpassword ==false) {
				echo '<div class="alert alert-danger">Your Password Not Found</div>';
			}
			else{
				$result=$this->con->query("SELECT *FROM tbl_users WHERE (uName= '$usernameEmail'OR email='$usernameEmail') AND password='$password'");
				
				if ($result->num_rows>0) {
					$data = $result->fetch_assoc();
					
					if ($data["status"]==0) {
						echo '<div class="alert alert-danger">Your Account Pending</div>';
					}
					else{
						session_start();
						$_SESSION['user']=$data["uName"];
						$_SESSION['role']=$data["role"];
						header("location: dashboard.php");
					}
					
				}
				else{
					header("location: login.php");
				}
			}
		}

		function checkEmaiUser($userEmail){
			$result = $this->con->query("SELECT *FROM tbl_users WHERE uName='$userEmail' OR email='$userEmail'");
			if ($result->num_rows>0) {
				return true;
			}
			else{
				return false;
			}
		}

		function checkPassword($password){
			$result = $this->con->query("SELECT *FROM tbl_users WHERE password='$password'");
			if ($result->num_rows>0) {
				return true;
			}
			else{
				return false;
			}
		}
		function user(){
			$result = $this->con->query("SELECT *FROM tbl_users");
			return $result;
		}

	}