<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Center Car - Loja de Carros">
  <meta name="author" content="Weslayne Kalline">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Center Car - Loja de Carros</title>
  <link rel="stylesheet" href="includes/css/carousel.css" type="text/css" />
  <link rel="icon" type="imagem/ico" href="favicon (2).ico" />
</head>

<?php
session_start();
include "UI_include.php";
include INC_DIR . 'header.inc';
?>

<body>
  <div class="container">
    <?php
    include INC_DIR . 'menu.inc';
    ?>
    <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>

    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <img src="./assets/imagens/1.jpg">
        <rect width="100%" height="100%" fill="#777"/>
      </svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 style="color: red;"> Mais <br> de 20 anos <br> no mercado</h1>
            <p style="font-weight: 600; color: white;">Maior variedade de modelos do Brasil <br>e seminovos.</p>
            <p><a style="background-image: linear-gradient(to right, red, darkorange); border-color: red;" class="btn btn-lg btn-primary" href="registre.php">Registre-se</a></p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <img src="./assets/imagens/2.jpg">
        <rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Novas histórias</h1>
            <p>Aqui você encontra os clássicos com um preço em conta.</p>
            <p><a style="background-image: linear-gradient(to right, darkorange , red); border-color: red;" class="btn btn-lg btn-primary" href="registre.php">Registre-se</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <img src="./assets/imagens/3.jpg">
        <rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Aventure-se</h1>
            <p>Diversos carros para você viver <br>uma nova aventura.</p>
            <p><a style="background-image: linear-gradient(to right, darkorange , red); border-color: red;" class="btn btn-lg btn-primary" href="registre.php">Registre-se</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <img src="./assets/imagens/4.jpg">
        <rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Construa novas lembranças</h1>
            <p>Carros para toda família, com conforto e segurança.</p>
            <p><a style="background-image: linear-gradient(to right, darkorange , red); border-color: red;" class="btn btn-lg btn-primary" href="registre.php">Registre-se</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <img src="./assets/imagens/5.jpg">
        <rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-center">
            <h1 >Volta ao passado</h1>
            <p><a style="background-image: linear-gradient(to right, darkorange , red); border-color: red;" class="btn btn-lg btn-primary" href="registre.php">Registre-se</a></p>
            <br><br><br><br><br>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <img src="./assets/imagens/8.jpg">
        <rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Elegância</h1>
            <p><a style="background-image: linear-gradient(to right, darkorange , red); border-color: red;" class="btn btn-lg btn-primary" href="registre.php">Registre-se</a></p> <br><br><br>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <img src="./assets/imagens/7.jpg">
        <rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 style="color: red;" >Só aqui.</h1>
            <p><a style="background-image: linear-gradient(to right, darkorange , red); border-color: red;" class="btn btn-lg btn-primary" href="ofertas.php">Veja nossos produtos</a></p> <br><br><br>
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
    </main>
  <?php
  include INC_DIR . 'foot.inc';
  ?>
  </div>
</body>

</html>