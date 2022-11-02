<?php
include 'database_conn.php';
$query = "SELECT * FROM customers limit 200";
$result = mysqli_query($db_connect, $query);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi CRUD Customers</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">  
</head>
<body> 

<div class="container mt-4">
    <div class="row">    
        <div class="col-md-12">
            <div class="float-start mb-4">
             <H2>Customers List</H2>
            </div>
            <div class="float-end">
                <a href="add.php" class="btn btn-success">Tambah Customers Baru</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Depan</th>
                        <th scope="col">Nama Belakang</th>
                        <th scope="col">Nama Email</th>
                        <th scope="col">Bergabung</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>  
                <tbody>
                    <?php if($result->num_rows > 0) : ?>
                        <?php while ($customer_data = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                            <th scope="col"><?php echo $customer_data['customer_id'] ?></th>
                            <td> <?php echo $customer_data['firstname'] ?></td>
                            <td> <?php echo $customer_data['lastname'] ?></td>
                            <td> <?php echo $customer_data['email'] ?></td>
                            <td> <?php $new_date = new DateTime($customer_data['created']);
                            echo $new_date->format('Y-m-d');?>></td>
                            <td>
                                <a href="edit.php?customer_id=<?php echo $customer_data['customer_id']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?customer_id=<?php echo $customer_data['customer_id']; ?>" class="btn btn-primary">Hapus</a>
                            </td>
                            </tr>
                            <?php endwhile; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="3" rowspam="1" headers="">Tidak ada data ditemukan!</td>
                                </tr>
                            <?php endif; ?>
                            <?php mysqli_free_result($result); ?>                           
                </tbody>  
            </table>    
        </div>
    
    </div>


</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>