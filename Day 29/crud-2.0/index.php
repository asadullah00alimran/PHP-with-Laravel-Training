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

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
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
                if (isset($_POST["deleteinfo"])) {
                    $id = $_POST["deleteinfo"];
                    $imran->deleteData($id);
                }
                if (isset($_POST["present"])) {
                    $id = $_POST["present"];
                    echo $imran->absent($id);
                }
                if (isset($_POST["absent"])) {
                    $id = $_POST["absent"];
                    echo $imran->present($id);
                }
                if (isset($_POST["modalupdate"])) {
                    $id = $_POST["modalupdate"];
                    $imran->updateData($_POST, $id);
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
                    <label for="">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="null">-----Select Status-----</option>
                        <option value="1">Present</option>
                        <option value="0">Absent</option>
                    </select>
                </div>
                <div class="mt-3 form-group">
                    <button class="btn btn-primary form-control" type="submit" name="save">Save</button>
                </div>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">

            <table class="table" id="datatable1">
                <thead>
                    <tr>
                        <th>#sl No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $imran->showData();
                    if ($result->num_rows > 0) {
                        $sl = 1;
                        while ($data = $result->fetch_assoc()) {
                            echo '<tr>
                                            <td>' . $sl . '</td>
                                            <td>' . $data["name"] . '</td>
                                            <td>' . $data["email"] . '</td>                                           
                                            <td>
                                                
                                                <button  class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#update' . $data["id"] . '"><i class="fas fa-edit"></i></button>
                                                <button  class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete' . $data["id"] . '"><i class="fas fa-trash"></i></button>
                                            </td>';

                            if ($data["status"] == 1) {
                                echo '<td><form method ="POST"><button type="submit" name="present" value="' . $data["id"] . '" class ="btn btn-success btn-sm">Present</button></form></td></tr>';
                            } else {
                                echo '<td><form method ="POST"><button type="submit" name="absent" value="' . $data["id"] . '" class ="btn btn-warning btn-sm">Absent</button></form></td></tr>';
                            }

                            $sl++;
                    ?>
                            <!-- Modal for Delete -->
                            <div class="modal fade" id="delete<?php echo $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                                        </div>
                                        <div class="modal-body">
                                            Are You want to Delete this ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
                                            <!-- <a href = "delete.php?userid=<?php echo $data['id']; ?>"type="button" class="btn btn-danger">Delete</a> -->
                                            <form action="" method="POST">
                                                <button class="btn btn-danger" name="deleteinfo" value="<?php echo $data['id']; ?>">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal for Update -->
                            <div class="modal fade" id="update<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update User Data</h5>
                                        </div>
                                        <form method="POST">
                                            <div class="modal-body">
                                                <div class="form-group my-3">
                                                    <label for="">User Name</label>
                                                    <input type="text" value="<?php echo $data["name"] ?>" name="name" class="form-control">
                                                </div>
                                                <div class="form-group my-3">
                                                    <label for="">User Email</label>
                                                    <input type="text" value="<?php echo $data["email"] ?>" name="email" class="form-control">
                                                </div>
                                                <div class="form-group my-3">
                                                    <label for="">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="null">-----Select Status-----</option>
                                                        <option value="1">Present</option>
                                                        <option value="0">Absent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
                                                <button class="btn btn-success" value="<?php echo $data['id']; ?>" name="modalupdate">Update</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
        </div>
    </div>

<?php
                        }
                    } else {
                        echo "<tr>
                                            <td clospan='5'> Database is Empty</td>
                                    </tr>";
                    }
?>
</tbody>
</table>

</div>
</div>


<!-- CDN Link -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#datatable1').DataTable();
    });
</script>

</body>

</html>