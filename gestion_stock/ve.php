<?php
require '../CONFIGURATION/config.php';
session_start();

if (isset($_POST['submit'])){
    $id_vent = $_POST['id_vent'];
    $Client = $_POST['client'];
    $Produit = $_POST['produit'];
    $Qantite = $_POST['qte'];
    $Prix = $_POST['prix_unitaire'];

    $sql = "INSERT INTO vente ( id_vent, client, produit, qte, prix_unitaire) VALUES( '$id_vent,'$Client', '$Produit', '$Qantite', '$Prix')";

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
                Erreur! Impossible d\'ajouter un Produit: ' . $stmt->error . '
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
<?php include_once ("../dossier_inclusion/header.php");?>

    <div id="sale">
        <div id="sale-header">
            <h1>effectuer une vente</h1>
        </div>
        <form method="post">

        <div id="sale-details">
        <label for="id-vent">id :</label>
            <input type="text" id="id_vent" name="id_vent" required>
           
            <label for="client">Client :</label>
            <input type="text" id="client" name="client" required>
           

            <label for="product">Produit :</label>
            <input type="text" id="produit"  name="produit"required>
            

            <label for="quantity">Quantité :</label>
            <input type="text" id="quantity"  name="qte" required>
            <label for="quantity">prix:</label>
            <input type="text" id="quantity"  name="prix_unitaire" required>

           <button type="submit" name="submit"     onclick="return confirm('voulez vous ajouter ce produit ?')">Ajouter Produit</button> 
        </div>
        </form>

    <div class="text-center">
        <button class="btn btn-primary" onclick="imprimer()">Imprimer</button>
    </div>
</div>
    </div>

    <script src="script.js">
        
    </script>
</body>
</html>
