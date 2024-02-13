<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Facture</title>
    <link rel="stylesheet" href="../style/facture.css">
</head>
<body>
<?php include_once ("../dossier_inclusion/header.php");?>
    <div class="facture">
        <h2>FACTURE VENTE</h2>
        <form action="process_invoice.php" method="post">
            <label for="clientName">Nom du client :</label>
            <input type="text" id="clientName" name="clientName" required>

            <label for="clientEmail">telephone :</label>
            <input type="email" id="telephone" name="telephone" required>

           

            <label for="product">Produit :</label>
            <input type="text" id="product" name="product" required>

            <label for="quantity">Quantité :</label>
            <input type="number" id="quantity" name="quantity" required>

            <label for="unitPrice">Prix unitaire :</label>
            <input type="number" id="unitPrice" name="unitPrice" step="0.01" required>

            
            <button type="button" onclick="printInvoice()">Imprimer Facture</button>
        </form>
    </div>

    <script src="invoice.js">function printInvoice() {
    window.print();
}
</script>
</body>
</html>



<?php
require '../CONFIGURATION/configVente.php';
//commencer une nouvelle session
session_start();

// Vérifie si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupère les valeurs des champs du formulaire
    $client = $_POST['client'];
    $Produit = $_POST['produit'];
    $qte = $_POST['qte'];
    $Prix = $_POST['prix'];

    // Requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO vente ( id_client id_produit, quantite, prix_unitaire, total) 
    VALUES( '$client', '$Produit', '$qte', '$Prix')";

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
    
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.min.css">
    <title>Vente de Produits</title>
    <link rel="stylesheet" href="../STYLE/ve.css">
</head>
<body>


    <div id="sale">
        <div id="sale-header">
            <h1>effectuer une vente</h1>
        </div>
        <!--formulaire de vente  -->
        <form method="post">

        <div id="sale-details">
       
           
            <label for="client">Client :</label>
            <input type="text" id="client" name="client" required>
          
           

            <label for="product">Produit :</label>
            <input type="text" id="produit"  name="produit"required>
          
            <label for="quantite">Quantité :</label>
            <input type="number" id="quantite"  name="qte" required>

            <label for="prix">prix:</label>
            <input type="number" id="prix"  name="prix" required>
            <label for="prix">Total:</label>
            <input type="number" id="total"  name="total" required>
            
           <button type="submit" name="submit"     onclick="return confirm('voulez vous ajouter ce produit ?')">Ajouter Produit</button> 
        </div>
        </form>
        <table id="productTable">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>

    <div class="text-center">
    <input type="submit" id="submit" name="validate" onclick="return confirm('voulez vous confirmer cette vente ?')" value="effectuer vente">
    </div>
</div>
    </div>

    <script src="../JS/vente.js">
       
    </script>
</body>
</html>

body {
    font-family: Arial, sans-serif;
    margin-top: 10px;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 130vh;
 
}

#sale {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(27, 27, 27, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
}

select, input {
    height: 45px;
    width:100%;
    outline: none;
    border-radius: 4px;
    border:  1px solid rgb(0, 195, 255) ;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    margin-bottom: 5px;
    transition: all 0.3s ease;}

#submit {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #4caf50;
    color: white;
}

#sale-total {
    margin-top: 20px;
    font-weight: bold;
}
