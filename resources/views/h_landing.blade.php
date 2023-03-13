<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 4.5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>E-LIBRARY | SMKN 4 BOJONEGORO</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-transparan" id="mainNav">
        <!-- logo -->
        <a class="navbar-brand" href="#page-top">
            <img src="../img/logo.png" width="90" height="110" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <a class="navbar-brand font-weight-bold text-white" href="#page-top">E-Library</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-light" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">KATALOG</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link text-light" href="#">ACTIVITY</a>
            </li> -->
            </ul>
        </div>
    </nav>
    <!-- end navbar -->


    <!-- jumbotron -->      
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">WELCOME TO E-LIBRARY</h1><br> 
            <span class="font-weight-bold">SMKN 4 BOJONEGORO</span></h1>
            <p>Baca Buku Gratis, Efektif dan Efisien<br>
            Satu Cara Banyak Manfaat</p>
            <!-- login -->
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <!-- end login -->
        </div>
    </div>
    <!-- end jumbotron -->
    
    <div class="row justify-content-center text-center">
      <div class="col-7 text-center mb-1 mt-0">
        <h2>KATALOG</h2>
        <hr>
        <!-- <p>Bacalah Aku</p> -->
      </div>
    </div>

    <!-- caraosel -->
    <div class="caraosel mt-0 mx-5 mb-3">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/gd1.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Mobil Tangguh</h5>
              <p>Body kokoh cocok untuk bepergian jauh dengan medan yang extream</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/gd2.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Mobil Keluarga</h5>
              <p>Kapasitas yang lebih luas, dan memberikan kenyamanan extra.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/gd3.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Mobil Sport</h5>
              <p>Body mobil yang sangat epic dan kecepatan burok</p> -->
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- end caraosel -->
    
    @include('template.about')
    @include('template.footer')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <!-- Main JS -->
    <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <!-- Popper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <!-- Bootstrap JS -->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  </body>
</html>