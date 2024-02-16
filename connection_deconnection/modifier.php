<?php
require '../CONFIGURATION/config.php';
$id = $_GET['modifierid'];

// Vérifie si le formulaire a été soumis
if (isset($_POST['modifier'])) {
    // Récupère les valeurs des champs du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $pseudo = $_POST["pseudo"];
    $motDePasse = ($_POST["motDePasse"]);

    // Requête SQL pour mettre à jour les données dans la base de données
    $sql = "UPDATE `utilisateur` SET Nom='$nom', prenom='$prenom', pseudo='$pseudo', mot_de_passe='$motDePasse' WHERE id=$id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Redirection vers la page de liste des utilisateurs après la mise à jour
        header('location:listeUser.php');
        exit(); // Assurez-vous de sortir du script après la redirection
    } else {
        die(mysqli_error($conn)); // En cas d'erreur, affichez l'erreur SQL
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../STYLE/inscription.css">
    
    <title>modifier</title>
</head>

<body>
    <div class="inscription">
        <h1>modifier l'utilisateur..</h1>
        <h4>ces partie... </h4>
        <!--debut du formulaire d'inscription-->
        <form method="post">
            <div class="papa">
            <input type="text" name="nom" placeholder="" autocomplete="off" required>
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
            <input type="submit" id="submit" name="modifier" onclick="return confirm('voulez vous modifier cette utilisateur ?')" value="modifier">
        </form>
        
       
    </div>
</body>

</html>