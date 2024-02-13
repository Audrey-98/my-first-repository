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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>inclusion</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        
        <div class="header_toggle bg-"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dashboard-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span><i class="fas fa-user"></i></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dashboard-dropdown">
                <a class="dropdown-item" href="#"><i class="fas fa-user text-info"></i> Profile</a>
               <a class="dropdown-item" href="#"><i class="fas fa-cog text-info"></i> Paramètres</a>
               <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt text-info"></i> Déconnexion</a>
                    <!-- Ajoutez d'autres liens de sous-fonctions selon vos besoins -->
                </div>
            </li>
        </ul>
  </nav>
        
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav ">
            <div> <a href="#" class="nav_logo  ">  <span>
              <img
              src="logo-yata-experts_blanc.png"
              height="40"
              alt="YATA-EXPERTS "></span>
                        <div class="nav_list"> <a href="../page/index.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon me-3'></i>
                        <span class="nav_name">tableau de bord</span> </a>
                        

                         <a  href="../produit/produit.php" class="nav_link"> 
                            <i class='fa fa-shopping-basket me-3 text-info'></i> <span class="nav_name">Catalogue</span>
                              
                                
                            <a href="../gestion_stock/ve.php" class="nav_link"> <i class="fa fa-database me-3 text-info" ></i> <span
                            class="nav_name">Gestion de stock</span> </a>

                             <a href="../inventaire/inventaire.php" class="nav_link"> <i class="fa fa-archive me-3 text-info"></i> <span class="nav_name">Inventaire</span> </a>
                             </span> </a> 
                            <a  href="../gestion_stock/facture.php" class="nav_link"> 
                            <i class='fas fa-file-invoice me-3 text-info'></i> <span class="nav_name">Facture
                              
                            </span> </a> 
                            </span> </a> 
                            <a  href="../GESTION_STOCK/listeCLT.php" class="nav_link"> 
                            <i class='fa fa-shopping-basket me-3 text-info'></i> <span class="nav_name">Client
                              
                            </span> </a> 
                            
            </div> <div><a href="../connection_deconnection/fermeture.php" class="nav_link"> <i class='bx bx-log-out me-3 text-info'></i> <span
                    class="nav_name">Deconnexion</span> </a>
                     </a>
                  </div>
        </nav>
    </div>
    <!--Container Main start-->
    
    <!--Container Main end-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="../js/home.js"></script>
</body>
</html>