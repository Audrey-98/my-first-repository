<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../CONFIGURATION/config.php';
session_start();

if(isset($_POST['Submit'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $mot_de_passe = $_POST['mot_de_passe'];

    
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




<?php
require '../CONFIGURATION/config.php';
$id= $_GET['modifierid'];
// Vérifie si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupère les valeurs des champs du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $pseudo = $_POST["pseudo"];
    $motDePasse = md5($_POST["motDePasse"]);

    // Requête SQL pour insérer les données dans la base de données
    $sql = "update `utilisateur` set id=$id, Nom='$nom',prenom='$prenom', pseudo='$peudo', mot_de_passe='$motDePasse' where $id=id";

    $result= mysqli_query($conn, $sql);
if ($result){
   //echo "modification eussi reussi";
    header('location:listeUser.php');
}else{
    die(mysqli_error($conn));
} 
}
?>



<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../style/inventaire.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>inventaire</title>
</head>
<body>
<?php include_once ("../dossier_inclusion/header.php");?>
  <p> fiche d inventaire </p>
  <table>
  <tr class="bg-info">
  <tr class="bg-info">
            <th scope="col">Designation</th>
            <th scope="col">Categorie</th>
            <th scope="col">Marque</th>
            <th scope="col">Quantite</th>
            <th scope="col">Prix</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr >
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>boutom</td>
  </tr>
  </table>
</body>
</html>








<?php
require '../CONFIGURATION/config.php';
session_start();
if (isset($_POST['validate'])) {
$reference = $_POST['reference'];
$categorie = $_POST['categorie'];
$nom = $_POST['nom'];
$stockin = $_POST['stockin'];
$stockal = $_POST['stockal'];
$prix = $_POST['prix'];
$stockal = isset($_POST['stockal']) ? $_POST['stockal'] : ''; // Définit $stockal sur la valeur postée ou une chaîne vide si non définie
$stockin = isset($_POST['stockin']) ? $_POST['stockin'] : ''; // Définit $stockin sur la valeur postée ou une chaîne vide si non définie


// Requête SQL pour insérer les données dans la table produits
$sql = "INSERT INTO produit (Reference, Categorie, Nom_pro, stockinit, stkalert, Prix) 
VALUES ( '$reference', '$categorie', '$nom', '$stockin', '$stockal', '$prix')";

$stmt = $conn->prepare($sql);

// Vérifier si la préparation a réussi
if ($stmt) {
    // Exécution de la requête
    if ($stmt->execute()) {
        echo '<div class="alert alert-success text-center" role="alert">
      produit ajouter avec sucess
    </div>';
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">
        Erreur! Impossible d\'ajouter un produit: ' . $stmt->error . '
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
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../style/a"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
</head>
<body >
   
    <div class="container">
        <div class="title">informations sur le produit</div>
        <form method="post" >
            <div class="user-details">
            <div class="input-box">
                <div class="input-box">
                    <span class="details">Reference</span>
                    <input type="text" name="reference"  required>
                </div>
                
                <div class="input-box">
                    <span class="details">Categorie</span>
                    <input type="text" name="categorie"  required>
                </div>
                <div class="input-box">
                    <span class="details">nom</span>
                    <input type="text" name="nom"  required>
                </div>
                <div class="input-box">
                    <span class="details" >stock initial</span>
                    <input type="text" name="sotckin"   required>
                </div>

                <div class="input-box">
                    <span class="details" >stock alert</span>
                    <input type="text" name="sotckal"   required>
                </div>

                <div class="input-box">
                    <span class="details">Prix</span>
                    <input type="text" name="prix" required>
                </div>
                <div class="buttom">
                <button  type="submit" name="validate" value="ajouter">  </button>
            </div>
            </div>

        </form>
    </div>
</body>
</html>






*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;

}
body{
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center ;
    padding: 10px;
    background-color: aqua;
    
}
.container{
    max-width: 700px;
    width: 100%;   
    padding: 25px 30px ;
    background: #fff;
    border-radius: 4px;
   box-shadow: 20px 20px 40px -6px;
   height: 450px;

}
.container .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}
.container .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background: rgb(0, 195, 255);

}
.container form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;

}
form .user-details .input-box{
    margin-bottom: 15px;
    margin: 20px 0 12px 0;
    width: calc(100% / 2 - 20px);

}
.user-details .input-box .details{
    display: block;
    font-weight: 500;
    margin-bottom: 5px;

}
.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 4px;
    border:  1px solid rgb(0, 195, 255) ;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 0.3s ease;

}

form .buttom {
    height: 25px;
    margin: 15px 0;
}
form .buttom input{
    height: 100%;
    width: 100%;
    outline: none;
    color: #fff;
    background-color:rgb(0, 195, 255) ; 
    border: none;
   margin-left: 8rem;
   font-size:18px ;
   font-weight: 500;
   letter-spacing: 1px;
   border-radius: 4px;
}
form .buttom input:hover{
    background: goldenrod;
}
@media (max-width: 584px) {
    .container{
        max-width: 100%;
    }
form .user-details .input-box   {
    margin-bottom: 15px;
    width: 100%;
}
    .container form .user-details{
        max-height: 300px;
        overflow-y: scroll;
    }
    .user-details::-webkit-scrollbar{
        width: 0;
    } 
}
