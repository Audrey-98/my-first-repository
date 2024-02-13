<?php
require '../CONFIGURATION/configVente.php';
//commencer une nouvelle session
session_start();

// Vérifie si le formulaire a été soumis
if (isset($_POST['validate'])) {
    // Récupère les valeurs des champs du formulaire
    $client = $_POST['client'];
    $Produit = $_POST['produit'];
    $qte = $_POST['qte'];
    $Prix = $_POST['prix'];
    $total= $_post['total'];

    // Requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO vente ( id_clt id_pro, quantite, prix_unitaire, total) 
    VALUES( '$client', '$Produit', '$qte', '$Prix','$total')";

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
    <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../STYLE/ve.css">
    
    <title>Vente</title>
    <style>
        /* Votre CSS ici */
    </style>
</head>
<body>

    <form method="post" id="saleForm">
    <h1><b><u>Effectuer une vente</u></b></h1>

            <label for="Client">Client :</label>
                <div class="selec_box">
                 <select name="Client">
                 <?php foreach ($_GET["client"] as $Client): ?>
                    <option value="<?= $Client->id_clt ?>"><?= $Client->nom ?></option>
                <?php endforeach ?>
                 </select>
              </div>
            
            <label for="product">Produit :</label>
                <div class="selec_box">
                  <select name="produit">
                     <?php foreach ($_GET["produit"] as $produit): ?>
                        <option value="<?= $produit->id_pro ?>"></option>
                     <?php endforeach ?>
                 </select>
                </div>
                    
            <label for="quantite">Quantité :</label>
            <input type="number" id="quantite"  name="qte" required>

            <label for="prix">prix:</label>
            <input type="number" id="prix"  name="prix" required>
           
            <label for="prix">Total:</label>
            <input type="number" id="total"  name="total" required>

        <button type="button" id="addProduct" >Ajouter Produit</button>
        
        <table id="productTable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- Les lignes des produits ajoutés seront insérées ici -->
            </tbody>
        </table>
        
        <label for="total">Total :</label>
        <input type="text" id="total" name="total" readonly>

        <button type="submit" name="validate">Valider Vente</button>
    </form>

    <script>
        // Votre JavaScript ici
    </script>
</body>
</html>
