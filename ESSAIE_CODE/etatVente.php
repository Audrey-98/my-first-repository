<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement des Ventes</title>
    <link rel="stylesheet" href="../style/etat.css">
</head>
<body>
    <div class="container">
        <h2>Enregistrement des Ventes</h2>

        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Inclure votre logique PHP pour afficher les ventes depuis la base de données
                    // par exemple, une requête SQL pour récupérer les ventes enregistrées
                    // $ventes = fetchVentesFromDatabase();
                    // foreach ($ventes as $vente) {
                    //     echo "<tr><td>{$vente['product']}</td><td>{$vente['quantity']}</td><td>{$vente['price']}</td></tr>";
                    // }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
