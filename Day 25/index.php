<?php

$db_con = new mysqli("localhost","root","","aai");
if($db_con){
    echo "Database Connected Successfully";
}
else{
    echo "Failed to connect Database";
}

if (isset($_POST["submit"])) {
    
    $name = $_POST["$name"];
    $email = $_POST["$email"];
    $phone = $_POST["$phone"];
    $passward = $_POST["$passward"];
    $conpassward = $_POST["$conpassward"];
    $declaration = $_POST["$declaration"];

    $db_con->query("INSERT INTO tbl_user_data(name,email,phone,passward,conpassward,declaration)
        VALUES('$name','$email','$phone','$passward',$conpassward,'$declaration')");
}

?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account System</title>

    <!-- Bootstrap CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="vh-100 bg-image" style="background-image: url('images/bg.jpg');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body py-5 px-1">
                                <h4 class="text-uppercase text-center mb-2">Register</h4>

                                <form method="POST">

                                    <div class="form-outline mb-1 mx-5">
                                        <label class="form-label" for="form3Example1cg">Name</label>
                                        <input type="text" name="name" id="form3Example1cg" class="form-control form-control-small" placeholder="Enter Your Name"/>
                                    </div>

                                    <div class="form-outline mb-1 mx-5">
                                        <label class="form-label" for="form3Example3cg">Email</label>
                                        <input type="email" name="email" id="form3Example3cg" class="form-control form-control-small" placeholder="Enter Your Email" />
                                    </div>

                                    <div class="form-outline mb-1 mx-5">
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                        <input type="password" name="pasward" id="form3Example4cg" class="form-control form-control-small" placeholder="Enter Password" /> 
                                    </div>

                                    <div class="form-outline mb-2 mx-5">
                                        <label class="form-label" for="form3Example4cdg">Confirm Password</label>
                                        <input type="password" name="conpassward" id="form3Example4cdg" class="form-control form-control-small" placeholder="Re-Enter Passward" /> 
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-3">
                                        <input class="form-check-input me-2" name="declaration" type="checkbox" value="agree" id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="button"
                                            class="btn btn-success btn-block btn-small gradient-custom-2 text-body" name="submit" >Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-2 mb-0">Have already an account? <a href="#!"
                                        class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>