<?php
require '../CONFIGURATION/config.php';
session_start();
if (isset($_POST['validate'])) {
$reference = $_POST['reference'];
$categorie = $_POST['categorie'];
$nom = $_POST['nom'];
$stockin = $_POST['stockin'];
$stockal = $_POST['stockal'];
$prix = $_POST['prix'];
$stockal = isset($_POST['stockal']) ? $_POST['stockal'] : ''; // Définit $stockal sur la valeur postée ou une chaîne vide si non définie
$stockin = isset($_POST['stockin']) ? $_POST['stockin'] : ''; // Définit $stockin sur la valeur postée ou une chaîne vide si non définie


// Requête SQL pour insérer les données dans la table produits
$sql = "INSERT INTO produit (Reference, Categorie, Nom_pro, stockinit, stkalert, Prix) 
VALUES ( '$reference', '$categorie', '$nom', '$stockin', '$stockal', '$prix')";

$stmt = $conn->prepare($sql);

// Vérifier si la préparation a réussi
if ($stmt) {
    // Exécution de la requête
    if ($stmt->execute()) {
        echo '<div class="alert alert-success text-center" role="alert">
      produit ajouter avec sucess
    </div>';
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">
        Erreur! Impossible d\'ajouter un produit: ' . $stmt->error . '
    </div>';
    }

    // Fermeture du statement
    $stmt->close();
} else {
    // En cas d'échec de la préparation
    echo '<div class="alert alert-danger text-center" role="alert">
    Erreur lors de la préparation de la requête: ' . $conn->error . '
</div>';
}
}
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
   
    <div class="container">
        <div class="title">informations sur le produit</div>
        <form method="post" >
            <div class="user-details">
            <div class="input-box">
                <div class="input-box">
                    <span class="details">Reference</span>
                    <input type="text" name="reference"  required>
                </div>
                
                <div class="input-box">
                    <span class="details">Categorie</span>
                    <input type="text" name="categorie"  required>
                </div>
                <div class="input-box">
                    <span class="details">nom</span>
                    <input type="text" name="nom"  required>
                </div>
                <div class="input-box">
                    <span class="details" >stock initial</span>
                    <input type="text" name="sotckin"   required>
                </div>

                <div class="input-box">
                    <span class="details" >stock alert</span>
                    <input type="text" name="sotckal"   required>
                </div>

                <div class="input-box">
                    <span class="details">Prix</span>
                    <input type="text" name="prix" required>
                </div>
                <div class="buttom">
                <button  type="submit" name="validate" value="ajouter">  </button>
            </div>
            </div>

        </form>
    </div>
</body>
</html>