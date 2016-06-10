<!DOCTYPE html>
<html lang="pl">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Trchę o mnie, czyli po co ta strona</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="../index.php">wróć</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Z prawej</a></li>
        <li><a href="#">również są</a></li>
        <li><a href="#">przyciski</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Sklep ?</h3>
  <img src="Kawyyy.BMP" class="img-responsive img-circle margin" style="display:inline" alt="Kawa" width="350" height="350">
  <h3>Lubię kawę</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Po co strona?</h3>
  <p>Strona została przygotowana na potrzeby zaliczenia przedmiotu. </p>
  <p>Celem utworzenia strony jest zaprezentowanie umiejętności zastosowania kilku podstawowych technik </p>
  <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-arrow_up"></span> GÓRA
  </a>
</div>>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Wykorzystałem widok bootstrapa <a href="http://www.w3schools.com"> Zajrzyj na http://www.w3schools.com/</a></p> 
</footer>

</body>
</html>
