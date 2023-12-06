<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../gestion_stock/vente.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_vente</title>
</head>
<body>
 
  <header>
    <!-- En-tête de la page -->
    <h1>Page de vente</h1>
    <!-- Ajoutez d'autres éléments d'en-tête si nécessaire -->
  </header>

  <main>
    <!-- Contenu principal de la page -->
    <section>
      <h2>Nouvelle vente</h2>
      <!-- Formulaire de vente -->
      <form id="form-vente">
        <!-- Champs de saisie des informations de vente -->
        <div>
          <label for="produit">Produit :</label>
          <input type="text" id="produit" name="produit" required>
        </div>
        <div>
          <label for="quantite">Quantité :</label>
          <input type="number" id="quantite" name="quantite" required>
        </div>
        <!-- Ajoutez d'autres champs de saisie si nécessaire -->

        <!-- Bouton pour effectuer la vente -->
        <button type="submit"><i class="fas fa-cash-register"></i> Effectuer la vente</button>
      </form>
    </section>

    <section>
      <h2>Historique des ventes</h2>
      <!-- Tableau pour afficher l'historique des ventes -->
      <table>
        <thead>
          <tr>
            <th>Date</th>
            <th>Produit</th>
            <th>Quantité</th>
            <!-- Ajoutez d'autres colonnes si nécessaire -->
          </tr>
        </thead>
        <tbody>
          <!-- Lignes de données des ventes -->
          <tr>
            <td>2023-10-31</td>
            <td>Produit A</td>
            <td>5</td>
            <!-- Ajoutez d'autres cellules si nécessaire -->
          </tr>
        </tbody>
      </table>
    </section>
  </main>

  <footer>
    <!-- Pied de page -->
    <p>Gestion de stock - Tous droits réservés</p>
    <!-- Ajoutez d'autres éléments de pied de page si nécessaire -->
  </footer>
</body>
</html>
</body>
</html>