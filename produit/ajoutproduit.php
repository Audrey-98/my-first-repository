<?php
require '../CONFIGURATION/config.php';
session_start();

if (isset($_POST['validate'])) {
    // Récupération des valeurs du formulaire
    $reference = $_POST['reference'];
    $categorie = $_POST['categorie'];
    $nom = $_POST['nom'];
    $quantite = $_POST['quantite'];
    $prix = $_POST['prix'];

    // Requête SQL pour insérer les données dans la table produits
    $sql = "INSERT INTO produit (Reference, Categorie, Nom_pro, quantite, Prix) 
            VALUES ('$reference', '$categorie', '$nom', '$quantite', '$prix')";

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../STYLE/ajoutproduit.css"/> 
</head>
<body>
<?php include_once ("../dossier_inclusion/header.php");?>
        <div class="container">
            <div class="title">Ajouter un produit </div>
            <form method="post">
                <div class="user-details">
                <div class="input-box">
                    <span class="details">Reference</span>
                    <input type="text" name="reference"  required>
                </div>
                <div class="input-box">
                    <span class="details" >quantite en stock</span>
                    <input type="text" name="quantite"   required >
                </div>
               

                <div class="input-box">
                    <span class="details">Categorie</span>
                    <input type="text" name="categorie"  required>
                </div>
                
              

                <div class="input-box">
                    <span class="details">Prix</span>
                    <input type="text" name="prix" required>
                </div>
                <div class="input-box">
                    <span class="details">nom</span>
                    <input type="text" name="nom"  required>
                </div>
                
                <div class="button">
                <input  type="submit" name="validate" value="ajouter">  </input>
            </div>

        </div>
    </form>
    
</body>
</html>