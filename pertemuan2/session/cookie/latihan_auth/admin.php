<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login-page.php');
}
?>

<!DOCTYPE html>
<html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>E-Commerce Irghy</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
    </head>
    <body>
        <header>
          <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
              IRSHOP

          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="logout.phpAAAA">Logout</a>
              </li>
            </ul>
            
            <form class="container-fluid">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Produk" aria-label="Username" aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </span>
               
              </div>
            </form>
            <ul className="navbar-nav ml-auto">
              <div class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                </li>

                  <li class="nav-item ">
                    <a class="nav-link" href="#"><i class="fas fa-envelope"></i></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
              </div>

            </ul>
          </div>
         
        </div>
      </nav>
        </header>

        <div id="myCarousel" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="bd-placeholder-img" width="100%" height="100%" src="img/Banner-Blog-02-9.jpg"
                  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect></img>
    
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="img/photo-1634973357973-f2ed2657db3c.jpg"
                  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect></img>
    
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="img/thumbnail-onine-shopping.jpg"
                  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect></img>
    
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

          </div>

          <script src="js/bootstrap.min.js"></script>
          <div><br></div>

        <div class="container">
            <div class="row" style="text-align-last: center;">
                <div class="col ">
                    <img src="img/car-disc-brake-brembo-brake-pad-png-favpng-E2EMaatEcLfdBB5hNTeGu0WLz-removebg-preview.png" height="200px" width="250px"><br>Otomotif
                </div>
                <div class="col ">
                    <img src="img/varsity-removebg-preview.png" height="220px" width="170px"><br>Varsity Pria
                </div>
                <div class="col ">
                    <img src="img/3085549572c69341c6962ba941a7fe4c-removebg-preview.png" height="220px" width="220px"><br>Hoodie Wanita
                </div>
                <div class="col ">
                    <img src="img/0d0ac56f84ea1697ff4a7b4cc320fa2a-hi-removebg-preview.png" height="220px" width="190px"><br>Komputer & Aksesoris
                </div>
                <div class="col ">
                    <img src="img/my-galaxy-z-fold3-f926-5g-sm-f926bzkdxme-474118243-removebg-preview.png" height="220px" width="250px"><br>Handphone & Aksesoris
                </div>
                <div class="col ">
                    <img src="img/598-5982306_jordan-proto-max-hd-png-download-removebg-preview.png" height="150px" width="270px"><br>Sepatu
                </div>
            </div>
        </div>
    </body>
</html>