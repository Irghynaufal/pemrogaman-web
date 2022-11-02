<?php

include "database_conn.php";
$query = "SELECT * FROM customers WHERE customer_id='" . $_GET["customer_id"] . "'";
$result = mysqli_query($db_connect, $query);
$customer = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">  
</head>
<body>
<div class="container mt-4">
    <div class="page-header mb-4">
        <h2> Edit Customer </h2>
    </div> 
    <div class="row">
        <div class="col-md-12">
            <form>
                <input type="hidden" name="customer_id" value="<?php echo $_GET["customer_id"]; ?>" class="form-control" required>
                <div class="form-group">
                    <label for="exampleInputEmail">Nama Depan</label>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $customer ["firstname"] ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Nama Belakang</label>
                    <input type="text" name="lastname" class="form-control" value="<?php echo $customer ["lastname"] ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Nama Depan</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $customer ["email"] ?>" required>
                </div>
                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
            </form>
        </div>   
    </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>