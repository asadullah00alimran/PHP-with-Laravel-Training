<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 27</title>


    <!-- Boostrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form method="POST" class="" action="insert.php">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3 mt-5">
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
                                        <input type="email" name="email" id="" class="form-control form-control-small" placeholder="Enter Your Email" />
                                    </div>

                                    <div class="form-outline mb-1 mx-5 ">
                                        <label class="form-label" >Status</label>
                                        <select name="status" id="status" class="form-control form-control-small">
                                            <option value="2">------Select Status------</option>
                                            <option value="1">Present</option>
                                            <option value="0">Absent</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="sub"
                                            class="btn btn-success btn-block btn-small form-control  mx-5 form-control-small gradient-custom-2 text-body mt-3" name="submit" >Register</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    
</body>
</html>
