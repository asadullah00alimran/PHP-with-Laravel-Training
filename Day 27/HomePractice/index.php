<?php
include "classes.php";


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PRACTICE</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <form method="POST" class="pt-3">
        <div class="my-3 row">
            <div class="mt -2 col-md-4 offset-md-4">
                <?php

                $imran = new Imran();

                if (isset($_POST["save"])) {

                    $imran->insertData($_POST);
                }
                ?>
                <div class="mt-4 form-group">
                    <label for="">User Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                </div>
                <div class="mt-3 form-group">
                    <label for="">User Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                </div>
                <div class="mt-3 form-group">
                    <select name="status" id="status" class="form-control">
                        <option value="null">-----Select Status-----</option>
                        <option value="1">Present</option>
                        <option value="0">Absent</option>
                    </select>
                </div>
                <div class="mt-3 form-group">
                    <button class="btn btn-success form-control" type="submit" name="save">Save</button>
                </div>

            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="" method="POST">
                <table class="table">
                    <tr>
                        <th>#sl No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $result = $imran->showData();
                    $sl = 1;
                    while ($data = $result->fetch_assoc()) {
                        echo '<tr>
                                <td>' . $sl . '</td>
                                <td>' . $data["name"] . '</td>
                                <td>' . $data["email"] . '</td>
                                <td>' . $data["status"] . '</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="delete.php?uid="'.$data["id"].'" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>';
                        $sl++;
                    }
                    ?>
                </table>
            </form>
        </div>
    </div>


</body>

</html>