<?php

$con = new mysqli("localhost", "root", "", "aai");

if ($con) {
    echo "Database Connect Successfully";
} else {
    echo "Database can't Connect Successfully";
}

function abc($name, $email, $status)
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $status = $_POST["status"];

    con->query("INSERT INTO tbl_student(name,email,status)
            VALUES('$name','$email','$status')");
}

abc("imran","a@gmail.com",1);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <form method="POST" class="m-5">
        <div class="form-group">
            <label for="email">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label></label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="status">Status</label></label>
            <select name="status" id="status" class="my-2 py-1">
                <option value="2">---Select Status---</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>


</body>

</html>