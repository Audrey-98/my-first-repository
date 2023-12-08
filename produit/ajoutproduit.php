<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../style/ajoutproduit.css"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
</head>
<body >
   <?php include_once ("../dossier_inclusion/header.php");?>
    <div class="container">
        <div class="title">AJOUTER UN PRODUIT</div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Reference</span>
                    <input type="text"  required>
                </div>
                <div class="input-box">
                    <span class="details">Designation</span>
                    <input type="text"  required>
                </div>
                <div class="input-box">
                    <span class="details">Categorie</span>
                    <input type="text"  required>
                </div>
                <div class="input-box">
                    <span class="details">Marque</span>
                    <input type="text"  required>
                </div>
                <div class="input-box">
                    <span class="details" >Quantite</span>
                    <input type="text"    required>
                </div>
                <div class="input-box">
                    <span class="details">Prix</span>
                    <input type="text"  required>
                </div>
                <div class="buttom">
                <input  type="submit" value="ajouter">  </button></a>
            </div>
            </div>

        </form>
    </div>
</body>
</html>