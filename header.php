<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>

<!-- Navbar + image -->
    <nav class="one navbar navbar-expand-lg">
      <div class="container-fluid">
        <img src="img/tourism.png" class="logo" alt="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">OUR SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">TOUR PACKAGE</a>
            </li>
            </ul>
          </div>
        </div>
      </nav>
    <div>

<!-- Simulate a smartphone / tablet -->
      <div class="headerm">
         <div class="mobile-container">
         <!-- Top Navigation Menu -->
         <div class="topnav">
           <a href="#home" class="active"><img src="img/tourism.png" class="logo2" alt="logo"></a>
           <div id="myLinks">
             <a href="#news">HOME</a>
             <a href="#contact">ABOUT US</a>
             <a href="#about">OUR SERVICES</a>
             <a href="#about">TOUR PACKAGE</a>
           </div>
           <a href="javascript:void(0);" class="icon" onclick="myFunction()">
             <i class="fa fa-bars"></i>
           </a>
         </div>
        </div>
      </div>
         <script>
         function myFunction() {
           var x = document.getElementById("myLinks");
           if (x.style.display === "block") {
             x.style.display = "none";
           } else {
             x.style.display = "block";
           }
         }
         </script>


          <!-- <img class="mouse" src="img/mouse.png" alt="mouse">
          <img class="arrowl" src="img/left-arrow.png" alt="arrow1">
          <img class="arrowr" src="img/right-arrow.png" alt="arrow2">
        </div> -->
        <div id="demo" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
          <img src="img/mouse.png" alt="souris">
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/header3.png" alt="Los Angeles" width="1100" height="500">
              <div class="carousel-caption">
                <p class="dollar">From $199/Person</p>
                <img src="img/layer1.png" class="layer1" alt="">
                <p class="discover">Discover Greece</p>
                <p class="exp">TRAVEL WITH UNIQUE EXPERIENCE</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/header3.png" alt="Chicago" width="1100" height="500">
              <div class="carousel-caption">
                <h3>Discover UK</h3>
                <p>UK !</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/header3.png" alt="New York" width="1100" height="500">
              <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <img src="img/left-arrow.png" alt="fleche gauche">
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <img src="img/right-arrow.png" alt="fleche droite">
          </a>
        </div>
