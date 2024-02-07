<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/connct.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.min.css">
    <title>Connexion à l'Application de Gestion de Stock</title>
</head>
<body>
    <h3>bienvenue sur notre application <br> de gestion de stock <br> connectez-vous... </h3> <br>
   
      
<div class="pannel-body">
   
        <form id="loginForm">
            <div class="panel-heading">se connecter....</div>
            <label for="name">Nom d'utilisateur : <input type="text" id="username" name="username" required></label><br>
           

            <label for="password">Mot de passe : <input type="pwd" id="password" name="password" required>
            </label><br>
           
            <button type="submit" onclick="return confirm('voulez vous ajouter cette utilisateur ?')">Se connecter</button>
        
        
        <div class="forgot-password">
            <a href="forgot_password.html">Mot de passe oublié ?</a>
        </div>
    </div>
</div>
</form>
<?php

require '../CONFIGURATION/config.php';
// Assurez-vous de remplacer ces valeurs par vos propres paramètres de base de données
$serveur = "locahost";
$username = "root";
$password = "";
$dbname = "elysammabase";


// Traitement du formulaire lorsqu'il est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash du mot de passe (sécurité recommandée)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Requête d'insertion dans la base de données
    $requete = "INSERT INTO utilisateur (username, password ) VALUES ('$username', '$Password')";

    $stmt = $conn->prepare($sql);

    // Vérifier si la préparation a réussi
    if ($stmt) {
        // Exécution de la requête
        if ($stmt->execute()) {
            echo '<div class="alert alert-success text-center" role="alert">
               utilisateur a ete ajouter avec succes. 
            </div>';
        } else {
            echo '<div class="alert alert-danger text-center" role="alert">
                Erreur! Impossible d\'ajouter cette utilisateur: ' . $stmt->error . '
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
    <script src="script.js">
      
        
    </script>

</body>
</html>


    </script>
</body>
</html>
