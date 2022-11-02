<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">  
</head>
<body>
<div class="container mt-4">
    <div class="row">    
        <div class="col-md-12">
            <div class="page-header mb-4">
             <H2>Customers List</H2>
            </div>
            <form action="add_process.php" method="post">
                <div class="form_group">
                    <label>Nama Depan</label>
                    <input type="text" name="firstname" class="form-control" required>
                </div> 
                <div class="form_group">
                    <label>Nama Belakang</label>
                    <input type="text" name="lastname" class="form-control" required>
                </div> 
                <div class="form_group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="save">
            </form>    
        </div>   
    </div>  
</div>
<script src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>