<?php

include "database.php";

class User extends Database
{

    function registration($data)
    {
        $fullname = $data["fullname"];
        $username = $data["username"];
        $email = $data["email"];
        $password = $data["password"];
        $conpassword = $data["conpassword"];
        $role = "user";
        $status = "0";

        if (empty($fullname)) {
            echo '<div class="alert alert-danger">Full Name Can not be empty</div>';
        } elseif (empty($username)) {
            echo '<div class="alert alert-danger">User Name Can not be empty</div>';
        } elseif (empty($email)) {
            echo '<div class="alert alert-danger">Email Can not be empty</div>';
        } elseif (empty($password)) {
            echo '<div class="alert alert-danger">Password Can not be empty</div>';
        } elseif (empty($conpassword)) {
            echo '<div class="alert alert-danger">Confirm Password Can not be empty</div>';
        } elseif ($password != $conpassword) {
            echo '<div class="alert alert-danger">Confirm Password not matched</div>';
        } else {

            $check = $this->checkUsernaeEmail($username, $email);

            if ($check == true) {
                echo '<div class="alert alert-danger">User Name or Email is already exist</div>';
            } else {
                $password = md5($password);
                $insert = $this->db_connection->query("INSERT INTO tbl_user(fullname,username,email,password,role,status)
                        VALUES('$fullname','$username','$email','$password','$role','$status')");

                if ($insert) {
                    echo '<div class="alert alert-success">Inserted data Successful</div>';
                } else {
                    echo '<div class="alert alert-danger">Data insert not Successful</div>';
                }
            }
        }
    }

    // Check Email and User name for Regiatration 

    function checkUsernaeEmail($username, $email)
    {
        $checkUnameMail = $this->db_connection->query("SELECT *FROM tbl_user WHERE username = '$username' OR email = '$email'");
        if ($checkUnameMail->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Log In Function

    function login($data)
    {
        $username = $data["username"];
        $password = $data["password"];
        $password = md5($password);
        $matchkUnameEmail = $this->checkEmailUsername($username);
        $matchPassword = $this->checkPassword($password);

        if ($matchkUnameEmail == false) {
            echo '<div class="alert alert-danger">Incorrect User name or Email</div>';
        } elseif ($password == false) {
            echo '<div class="alert alert-danger">Incorrect Password</div>';
        } else {

            $result = $this->db_connection->query("SELECT *FROM tbl_user 
                WHERE (username = '$username'OR email = '$username') AND password = '$password'");

            if($result->num_rows > 0){
                $data = $result->fetch_assoc();
                if($data["status"] == 0){
                    echo '<div class="alert alert-danger">Your Account is Pending. Wait for the confirmation</div>';
                }
                else{
                    session_start();
                    $_SESSION['user'] = $data["username"];
                    $_SESSION['role'] = $data["role"];
                    header("location: dashbord.php");
                }
            }
            else{
                echo '<div class="alert alert-danger">Something is Wrong</div>';
                header("location: login.php");
            }

        }
    }

    // Matching USer name or Email with database for login
    function checkEmailUsername($usernameEmail)
    {
        $check = $this->db_connection->query("SELECT *FROM tbl_user WHERE username = '$usernameEmail' OR email = '$usernameEmail' ");
        if ($check->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    // Matching Password with database for login
    function checkPassword($password)
    {
        $check = $this->db_connection->query("SELECT *FROM tbl_user WHERE password = '$password'");
        if ($check->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function user(){
        $result = $this->db_connection->query("SELECT *FROM tbl_user");
        return $result;
    }
}
