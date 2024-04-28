<?php
  session_start();
  IF(isset($_SESSION['ket_login'])){
    header('location: beranda.php');
    exit;
  }
?>
<html>
    <head>
        <title>Peduli Lindungi</title>
        <link href='bootstrap/css/bootstrap.css' rel='stylesheet'>
        <link href="fontawesome/css/all.css" rel="stylesheet">
    </head>
    <body class="bg bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand text-primary" href="#"><i class="fa-solid fa-hospital me-2"></i>Peduli Diri</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                </ul>
                <form class="d-flex">
                  <button class="btn btn-outline-primary " type="button" onclick="location.href='login.php'"><i class="fa-solid fa-door-open me-2"></i>Masuk/Mendaftar</button>
                </form>
              </div>
            </div>
    </nav>

        <div class="container mt-2">
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            </div>
              <div class="carousel-inner" data-bs-interval="2000">
                <img src="images/corona1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark bg bg-white">
                  <b><i><h4>Selamat Datang Di Aplikasi Peduli Diri</h4></i></b>
                  <p>Temukan Informasi Mengenai Aplikasi Peduli Diri Dengan Mendaftar</p>
                </div>
              </div>
            </div>
          </div>
          <br>
        </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
          
    </body>
</html>