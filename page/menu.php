<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.min.css">
  <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
  <title>page d'acccueil</title>
</head>

<body id="body-pd">
  <header class="header" id="header">

    <div class="header_toggle bg-active"> <i class='bx bx-menu' id="header-toggle"></i> </div>

  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav ">
      <div> <a href="#" class="nav_logo"> <span>
            <img src="logo-yata-experts_blanc.png" height="40" alt="YATA-EXPERTS "></span>
          <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon me-3'></i>
              <span class="nav_name">tableau de bord</span> </a>

            <a href="/produit/produit.php" class="nav_link">
              <i class='fa fa-shopping-basket me-3 text-info'></i> <span class="nav_name">Catalogue</span> </a>

            <a href="#" class="nav_link"> <i class="fa fa-database me-3 text-info"></i> <span class="nav_name">Gestion
                de stock</span> </a>

            <a href="#" class="nav_link"> <i class="fa fa-archive me-3 text-info"></i> <span
                class="nav_name">Inventaire</span> </a>


          </div>
          <div >
            <a href="#" class="nav_link"> <i class='bx bx-log-out me-3 text-info'></i> <span
                class="nav_name">Deconnexion</span> </a>
          </div>
        </div>
    </nav>
  </div>
  <!--Container Main start-->

  <!--Container Main end-->
  <p>Bienvenue dans notre application de gestion de stock !<br>
    Nous sommes ravis de vous accueillir et de vous offrir <br>une solution efficace pour gérer vos stocks de manière
    simple et intuitive.</p>
  <div class="container">
    <div class="row ">
      <div class="col bg-info me-4"><i class="fas fa-user-plus"></i>
        Nouveau Client
      </div>
      <div class="col bg-warning me-4 ">
        <i class="fas fa-chart-line"></i>
        nombre <br>de vente
      </div>
      <div class="col bg-primary me-4">
        <i class="fas fa-cash-register"></i>
        effectuer <br>une vente
      </div>
      <div class="col bg-success me-4">
        <i class="fas fa-search"></i>
        rechercher<br> un client
      </div>
    </div>
  </div>
  <h3><u>Nos produits</u></h3>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-50" src="../photo/téléchargé (1).jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (10).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (11).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (12).jpg" alt="Third slide">
    </div><div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (13).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (14).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (15).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (16).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (17).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (19).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (12).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (20).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (21).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (22).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (3).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (4).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photo/téléchargé (5).jpg" alt="Third slide">
    </div>
  </div>
</div>
  <script src="../js/home.js"></script>
</body>

</html>