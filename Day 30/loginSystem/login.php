<?php
// include "Classes/database.php";
include "Classes/user.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>Registration Page</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-3">
                <?php

                    $user = new User();
                    if(isset($_POST["login"]))
                    {
                        $result = $user->login($_POST);
                    }

                ?>
                <form action="" method="post" class="p-3 border rounded-3">
                    <h3 class="text-center">Log In</h3>                   
                    <div class="username form-group mt-2">
                        <label for="username">User Name or Email </label>
                        <input type="text" class="form-control mt-1" name="username" id="username">
                    </div>
                    <div class="password form-group mt-2">
                        <label for="password">User Password</label>
                        <input type="password" class="form-control mt-1" name="password" id="password">
                    </div>
                    <div class="others mt-3">
                        <p class="text-center">Create Account<a href="register.php">Register</a></p>
                    </div>
                    <div class="login form-group my-2">
                        <input type="submit" class="btn btn-success form-control mt-1" name="login" value="Log In" id="login">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>