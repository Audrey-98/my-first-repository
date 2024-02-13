<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../CONFIGURATION/config.php';
session_start();

if(isset($_POST['Submit'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $mot_de_passe = $_POST['mot_de_passe'];
    $user_type = htmlspecialchars($_POST['user_type']);
    
    // Préparation de la requête SQL avec des paramètres
    $sql = "SELECT * FROM utilisateur WHERE nom = '$nom' AND mot_de_passe = '$mot_de_passe' AND user_type = '$user_type'";
    $result = $conn->query($sql);

    // Vérification si la requête a retourné des résultats
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<script type="text/javascript">alert("Vous êtes connecté avec succès et vous êtes connecté en tant que ' . $row['user_type'] . '")</script>';
        }
        // Redirection en fonction du type d'utilisateur
        if($user_type == "administrateur") {
            echo '<script type="text/javascript">window.location.href="../CONNECTION_DECONNECTION/listeUser.php"</script>';
        } else {
            echo '<script type="text/javascript">window.location.href="../PAGE/index.php"</script>';
        }
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">
        Mot de passe ou nom d\'utilisateur incorrect ! Veuillez réessayer s\'il vous plaît.
      </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../STYLE/login.css">
    <title>Document</title>
</head>
<body>
    <div class="center">
        <h1>Connectez-vous..</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" name="nom" required>
                <span></span>
                <label>Utilisateur</label>
            </div>
            <div class="txt_field">
                <input type="password" name="mot_de_passe" required>
                <span></span>
                <label>Mot de passe</label>
            </div>
            <label>Type de compte</label>
            <select name="user_type">
                <option value="administrateur">Administrateur</option>
                <option value ="utilisateur">Utilisateur</option>
            </select>
           <div class="pass"><a href="#">Mot de passe oublié?</a></div>
            <input type="submit" value="Connecter" name="Submit">
            <div class="inscription">
                Créer un compte? <a href="inscription.php">Inscription</a>
            </div>
        </form>
    </div>
</body>
</html>
