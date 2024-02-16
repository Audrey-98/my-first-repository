<?php
require '../CONFIGURATION/config.php';
//commencer une nouvelle session
session_start();

// Vérifie si le formulaire a été soumis
if (isset($_POST['validate'])) {
    // Récupère les valeurs des champs du formulaire
    $client = $_POST['client'];
    $Produit = $_POST['produit'];
    $qte = $_POST['qte'];
    $Prix = $_POST['prix'];
    $total= $_POST['total'];

    // Requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO vente ( id_clt, id_pro, quantite, prix_unitaire, total) 
    VALUES( ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    // Vérifier si la préparation a réussi
    if ($stmt) {
        // Exécution de la requête
        if ($stmt->execute()) {
            echo '<div class="alert alert-success text-center" role="alert">
         vente effectuer avec success.
        </div>';
        } else {
            echo '<div class="alert alert-danger text-center" role="alert">
            Erreur! Impossible de faire une vente: ' . $stmt->error . '
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
      body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 160vh;
            margin: 0;
            padding-top: 50px;
            font-family: Arial, sans-serif;
        }

        form {
            border: 2px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
            width: 400px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }

        form input {
            width: calc(100% - 30px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff; /* Couleur bleue */
            color: #fff;
            cursor: pointer;
        }

        #panier {
            list-style-type: none;
            padding: 0;
        }

        #panier li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<?php include_once ("../dossier_inclusion/header.php");?>

    <form method="post" >
    <h4><b>Effectuer une vente</b></h4>
<div id="saleForm "> </div>
            <label for="Client">Client :</label>
            <input type="text" id="client"  name="client" required><br>
             
            
            <label for="produit">Produit :</label>              
            <input type="text" id="produit"  name="produit" required><br>  

            <label for="quantite">Quantité :</label>
            <input type="number" id="quantite"  name="qte" required><br>

            <label for="prix">prix:</label>
            <input type="number" id="prix"  name="prix" required><br>
             
        <label for="total">Total :</label>
        <input type="text" id="total" name="total" required><br>
        <button type="button"   onclick="ajouterAuPanier()">Ajouter au panier</button>

<h4>Panier</h4>
<ul id="panier"></ul>
</div>
<script>
   function ajouterAuPanier() {
    // Récupérer les valeurs des champs du formulaire
    var produit = document.getElementById("produit").value;
    var quantite = document.getElementById("quantite").value;
    var prix = document.getElementById("prix").value;

    // Vérifier si tous les champs sont remplis
    if (produit && quantite && prix) {
        // Créer un nouvel élément de liste pour représenter le produit
        var nouveauProduit = document.createElement("li");
        
        // Ajouter le contenu du produit à l'élément de liste
        nouveauProduit.textContent = "Produit:  " + produit + ", Quantité: " + quantite + ", Prix: " + prix;

        // Ajouter l'élément de liste au panier
        document.getElementById("panier").appendChild(nouveauProduit);
    } else {
        alert("Veuillez remplir tous les champs du formulaire.");
    }
}

    </script>
        <button type="submit" name="validate">Valider Vente</button>
    </form>

    <script>
        // Votre JavaScript ici
    </script>
</body>
</html>
