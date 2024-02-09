<!DOCTYPE html>
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/v.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.min.css">
    <title>Page de Vente</title>
</head>
<body>
<?php include_once ("../dossier_inclusion/header.php");?>
    <div class="form">
        <h1>effectuer une Vente</h1>
       
            
        <form id="saleForm">
        <label for="product">client:</label>
            <select id="client" name="client">
                <option value="1">client 1</option>
                <option value="2">client 2</option>
                <!-- Ajoutez d'autres client -->
            </select>
        
            <label for="product">Produit:</label>
            <select id="product" name="product">
                <option value="1">Produit 1</option>
                <option value="2">Produit 2</option>
                <!-- Ajoutez d'autres produits selon vos besoins -->
            </select>
            

            <label for="quantite">Quantité :</label>
            <input type="number" id="qte" name="qte" min="1" required>

            <label for="prix">prix total :</label>
            <input type="number" id="prix_tot" name="prix_tot" min="1" required>
            <input type="date" name="date" placeholder="date vente">

            <button type="submit">Valider Vente</button>
        </form>
        </div>
    </div>
    


    <script src="script.js">
       

</script>
</body>
</html>
