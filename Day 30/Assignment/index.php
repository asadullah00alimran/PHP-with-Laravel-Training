<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Product Page</title>
</head>

<body>

    <form method="POST" class="pt-3">
        <div class="my-3 row">
            <div class="mt -2 col-md-6 offset-md-3">
                <div class="mt-4 form-group">
                    <label for="">Product Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Product Name">
                </div>

                <div class="mt-3 form-group d-flex">
                    <div class=" form-group w-75">
                        <label for="">Product Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Deccription">
                    </div>
                    <div class="category w-25">
                        <label for="">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="null">---Select Category---</option>
                            <option value="1">Present</option>
                            <option value="0">Absent</option>
                        </select>
                    </div>
                </div>

                <div class="mt-3 form-group d-flex">
                    <div class="category w-50">
                        <label for="">Status</label>
                        <select name="category" id="category" class="form-control">
                            <option value="null">---Select Category---</option>
                            <option value="1">Available</option>
                            <option value="0">Not Available</option>
                        </select>
                    </div>

                    <div class="size w-50 ml-1">
                        <label for="">Size</label>
                        <select name="size" id="size" class="form-control">
                            <option value="null">---Select Size---</option>
                            <option value="1">Present</option>
                            <option value="0">Absent</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3 form-group d-flex">
                    <div class="price w-50">
                        <label for="">Cost Price</label>
                        <input type="text" name="costprice" class="form-control" placeholder="">

                    </div>
                    <div class="size w-50 ml-1">
                        <label for="">Sell Price</label>
                        <input type="text" name="saleprice" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="mt-3 form-group">
                    <button class="btn btn-primary form-control" type="submit" name="save">Save</button>
                </div>
            </div>
        </div>
        
    </form>




    <!-- CDN Link -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</body>

</html>