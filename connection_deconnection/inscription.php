<?php
require '../CONFIGURATION/config.php';

// Vérifie si le formulaire a été soumis
if (isset($_POST['validate'])) {
    // Récupère les valeurs des champs du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $pseudo = $_POST["pseudo"];
    $motDePasse =($_POST["motDePasse"]);

    // Requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO utilisateur (Nom, prenom, pseudo, mot_de_passe) 
            VALUES ('$nom', '$prenom', '$pseudo', '$motDePasse')";

    $stmt = $conn->prepare($sql);

    // Vérifier si la préparation a réussi
    if ($stmt) {
        // Exécution de la requête
        if ($stmt->execute()) {
           /* echo '<div class="alert alert-success text-center" role="alert">
          utilisateur ajouter avec succes
        </div>';*/ 
        header('location:listeUser.php');
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
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="../STYLE/inscription.css">
    <title>Document</title>
</head>

<body>
    <div class="inscription">
        <h1>Gestion utilisateur...</h1>
        <h4>creation d'un utilisateur... </h4>
        <!--debut du formulaire d'inscription-->
        <form method="post" autocomplete="off">
            <div class="papa">
            <input type="text" name="nom" placeholder="" autocomplete="off" required>
            <span></span>
            <label for="nom">Nom</label>
            </div>
            
            <div class="papa">
            <input type="text" name="prenom" placeholder="" autocomplete="off" required>
            <span></span>
            <label for="prenom" >prenom</label>
            </div>

            <div class="papa">
            <input type="text" name="pseudo" placeholder="" autocomplete="off" required>
            <span></span>
            <label for="pseudo" >pseudo</label>
            </div>

            <div class="papa">
            <input type="password" name="motDePasse" placeholder="" autocomplete="off" required>
            <span></span>
            <label for="motDePasse" >mot de passe</label>
            </div>

            <div class="papa">
            <input type="password" name="confirmationMP" placeholder="" autocomplete="off" required>
            <span></span>
            <label for="confirmationMP" >confirmerz le</label>
            </div>
            <input type="submit" id="submit" name="validate" onclick="return confirm('voulez vous ajouter cette utilisateur ?')" value="creer">
        </form>
       
        
    </div>
   
</body>

</html>