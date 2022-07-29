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

    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>

    <form method="POST" class="pt-3">
        <div class="my-3 row">
            <div class="mt -2 col-md-4 offset-md-4">
                <?php

                $imran = new Imran();
                if (isset($_GET["editId"])) {
                    $id = $_GET["editId"];
                    $data = $imran->findData($id)->fetch_assoc();
                } else {
                    header("location: index.php");
                }
                if(isset($_POST["update"])){
                    $imran->updateData($_POST, $id);
                }

                ?>
                <form action="" method="POST">
                    <div class="mt-4 form-group">
                        <label for="">User Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $data["name"]; ?>">
                    </div>
                    <div class="mt-3 form-group">
                        <label for="">User Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $data["email"]; ?>">
                    </div>
                    <div class="mt-3 form-group">
                        <label for="">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="null">-----Select Status-----</option>
                            <option value="1">Present</option>
                            <option value="0">Absent</option>
                        </select>
                    </div>
                    <div class="mt-3 form-group">
                        <button class="btn btn-success form-control" type="submit" name="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </form>


    <!-- CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>


</body>

</html>