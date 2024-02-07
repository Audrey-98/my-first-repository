<!DOCTYPE html>
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
        document.addEventListener("DOMContentLoaded", function() {
    var submitButton = document.querySelector("#saleForm button[type='submit']");

    submitButton.addEventListener("click", function(event) {
        event.preventDefault(); // Empêcher le formulaire de se soumettre normalement

        // Effectuer une action lorsque le bouton est cliqué
        alert("Bouton Valider Vente cliqué!");

        // Vous pouvez également rediriger l'utilisateur vers une autre page
        // window.location.href = "etatVente.php";
    });
});

</script>
</body>
</html>
