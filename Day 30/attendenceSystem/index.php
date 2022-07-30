<?php
include "classes.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="mt-5 row">
        <div class="col-md-4 offset-md-4 border border-1 rounded-3 p-4">
            <h4 class="text-center">REGISTER</h4>
            <form action="" method="POST" class= "form-group">
                <?php

                    $system = new AttendenceSystem();

                    if(isset($_POST["register"])){
                        $insert = $system->insertData($_POST);
                    }

                ?>
                <div class="name mt-2">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder = "Enter Student's Name">
                </div>
                <div class="id mt-2">
                    <label for="">ID</label>
                    <input type="text" name="id" class="form-control" placeholder = "Enter Student's ID">
                </div>
                <div class="email mt-2">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder = "Enter Student's Email">
                </div>
                <div class="phone mt-2">
                    <label for="">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder = "Enter Student's Phone number">
                </div>
                <div class="gender mt-2">
                <label for="">Gender</label>
                    <select name="gender" id="gender" class="form-control" >
                        <option value="null">-------Select Gender-------</option>
                        <option value="male">Male</option>
                        <option value="female">Feale</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <!-- <div class="password mt-2">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder = "Enter Password">
                </div>
                <div class="conpassword mt-2">
                    <label for="">Confirm Password</label>
                    <input type="password" name="conpasswaod" class="form-control" placeholder = "Enter Confirm Password">
                </div> -->
                <div class="register mt-3 text-center">
                    <button type="submit" name="register" class="btn btn-success px-5">Register</button>
                    <a href="student.php" class="btn btn-warning px-4">View Students</a>
                </div>
            </form>

        </div>
    </div>
</body>
</html>