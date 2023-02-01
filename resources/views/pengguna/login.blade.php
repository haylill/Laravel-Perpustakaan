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

    <style>
      .login-form {
          font-size: 15px;
      }
      form{
        margin: 0 340px;
        max-width: 400px;
      }
      .login-form form {
          margin-bottom: 15px;
          background: #f7f7f7;
          box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      }
      .login-form h2 {
          margin: 0 0 15px;
      }
      .form-control, .btn {
          min-height: 38px;
          border-radius: 2px;
      }
      .btn {        
          font-size: 15px;
          font-weight: bold;
      }
    </style>

    <title>E-LIBRARY | SMKN 4 BOJONEGORO</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-transparan" id="mainNav">
        <!-- logo -->
        <a class="navbar-brand" href="#page-top">
            <img src="../img/logo.png" width="90" height="110" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <a class="navbar-brand font-weight-bold text-white" href="#page-top">E-Library</a>
    </nav>
    <!-- end navbar -->

    <!-- jumbotron -->      
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">WELCOME TO E-LIBRARY</h1><br> 
            <span class="font-weight-bold">SMKN 4 BOJONEGORO</span></h1>
            <p>Baca Buku Gratis, Efektif dan Efisien<br>
            Satu Cara Banyak Manfaat</p>
            <form action="{{route('postlogin')}}" method="post">
                {{csrf_field()}}    
                <div class="form-group">
                    <input type="text" name="nomor_induk" class="form-control" placeholder="Nomor Induk" required="required">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>      
            </form>
          </div>
        </div>
    </div>
    <!-- end jumbotron -->


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