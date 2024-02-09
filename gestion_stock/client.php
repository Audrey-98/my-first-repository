<?php
require '../CONFIGURATION/config.php';
session_start();
if (isset($_POST['ajouter'])) {
$nom = $_POST['nom'];
$telephone = $_POST['telephone'];

// Requête SQL pour insérer les données dans la table clients
$sql = "INSERT INTO client (nom, telephone) VALUES ('$nom', '$telephone')";

$stmt = $conn->prepare($sql);

// Vérifier si la préparation a réussi
if ($stmt) {
    // Exécution de la requête
    if ($stmt->execute()) {
        echo '<div class="alert alert-success text-center" role="alert">
       client ajouter avec sucess 
    </div>';
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">
        Erreur! Impossible d\'ajouter un client: ' . $stmt->error . '
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
    <title>Gestion des clients</title>
    <link rel="stylesheet" href="../STYLE/client.css">
</head>
<body>
    <div class="container">
        <h1>Gestion des clients</h1>
        <form   method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <label for="telephone">Téléphone :</label>
            <input type="text" id="telephone" name="telephone" required>
            <button type="submit" name="ajouter">Ajouter Client</button>
        </form>
    </div>
    <script src="../JS/client.js"></script>
</body>
</html>
