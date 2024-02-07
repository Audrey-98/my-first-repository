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
