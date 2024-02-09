<?php
require '../CONFIGURATION/config.php';
session_start();
// Vérifie si le formulaire a été soumis
if (isset($_POST['validate'])) {
    // Récupère les valeurs des champs du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $pseudo = $_POST["pseudo"];
    $motDePasse = md5($_POST["motDePasse"]);

    // Requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO utilisateur (Nom, prenom, pseudo, mot_de_passe) 
            VALUES ('$nom', '$prenom', '$pseudo', '$motDePasse')";

    $stmt = $conn->prepare($sql);

    // Vérifier si la préparation a réussi
    if ($stmt) {
        // Exécution de la requête
        if ($stmt->execute()) {
            echo '<div class="alert alert-success text-center" role="alert">
           utilisateur ajouter avec succes 
        </div>';
        } else {
            echo '<div class="alert alert-danger text-center" role="alert">
            Erreur! Impossible d\'ajouter un utilisateur: ' . $stmt->error . '
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
    <link rel="stylesheet" href="../STYLE/inscription.css">
    <title>Document</title>
</head>

<body>
    <div class="inscription">
        <h1>inscrivez-vous...</h1>
        <h4>Inscrivez-vous ces partie... </h4>
        <!--debut du formulaire d'inscription-->
        <form method="post">
            <div class="papa">
            <input type="text" name="nom" placeholder="" required>
            <span></span>
            <label for="nom">Nom</label>
            </div>
            
            <div class="papa">
            <input type="text" name="prenom" placeholder="" required>
            <span></span>
            <label for="prenom" >prenom</label>
            </div>

            <div class="papa">
            <input type="text" name="pseudo" placeholder="" required>
            <span></span>
            <label for="pseudo" >pseudo</label>
            </div>

            <div class="papa">
            <input type="password" name="motDePasse" placeholder="" required>
            <span></span>
            <label for="motDePasse" >mot de passe</label>
            </div>

            <div class="papa">
            <input type="password" name="confirmationMP" placeholder="" required>
            <span></span>
            <label for="confirmationMP" >confirmerz le</label>
            </div>
            <input type="submit" id="submit" name="validate" onclick="return confirm('voulez vous ajouter cette utilisateur ?')" value="s'inscrire">
        </form>
        <p>en cliquant sur le boutton de connexion vous acceptez 
            <a href="#"> les termes de nos conditions</a> 
        </p>
        <p class="papi"> avez vous deja un compte?<a href="formConnexion.php"> cliquez ici </a> </p>
    </div>
</body>

</html>