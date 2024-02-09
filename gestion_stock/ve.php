<?php
require '../CONFIGURATION/configVente.php';

// Vérifie si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupère les valeurs des champs du formulaire
    $Client = $_POST['client'];
    $Produit = $_POST['produit'];
    $Qantite = $_POST['qte'];
    $Prix = $_POST['prix_unitaire'];

    // Requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO vente ( id_clt id_pro, qte, prix_unitaire, total) 
    VALUES( '$Client', '$Produit', '$Qte', '$Prix')";

    $stmt = $conn->prepare($sql);

    // Vérifier si la préparation a réussi
    if ($stmt) {
        // Exécution de la requête
        if ($stmt->execute()) {
            echo '<div class="alert alert-success text-center" role="alert">
            Produit  ajouté avec success.
        </div>';
        } else {
            echo '<div class="alert alert-danger text-center" role="alert">
            Erreur! Impossible d\'ajouter produit: ' . $stmt->error . '
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
    
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.min.css">
    <title>Vente de Produits</title>
    <link rel="stylesheet" href="../STYLE/ve.css">
</head>
<body>


    <div id="sale">
        <div id="sale-header">
            <h1>effectuer une vente</h1>
        </div>
        <form method="post">

        <div id="sale-details">
       
           
            <label for="client">Client :</label>
            <input type="text" id="client" name="client" required>
          
           

            <label for="product">Produit :</label>
            <input type="text" id="produit"  name="produit"required>
          
            <label for="quantite">Quantité :</label>
            <input type="number" id="quantite"  name="quantite" required>

            <label for="prix">prix:</label>
            <input type="number" id="prix"  name="prix" required>
            
           <button type="submit" name="submit"     onclick="return confirm('voulez vous ajouter ce produit ?')">Ajouter Produit</button> 
        </div>
        </form>

    <div class="text-center">
        <button class="btn btn-primary" onclick="imprimer()">Imprimer</button>
    </div>
</div>
    </div>

    <script src="../JS/vente.js">
       
    </script>
</body>
</html>
