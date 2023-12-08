<!DOCTYPE html>
<html>
<head>
<?php include_once ("../dossier_inclusion/header.php");?>
  <title>Gestion de stock</title>
  <!-- Inclure la bibliothèque Font Awesome -->
  <link rel="stylesheet" type="text/css" href="../gestion_stock/gestion_stock.css">
  <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.min.css">
  <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
  <header>
    <!-- En-tête de la page -->
    <h1>Gestion de stock</h1>
    <!-- Ajoutez d'autres éléments d'en-tête si nécessaire -->
  </header>

  <main>
    <!-- Contenu principal de la page -->
    <section>
      <h2>Liste des produits</h2>
      <!-- Tableau pour afficher la liste des produits -->
      <table>
        <thead>
          <tr>
            <th>Produit</th>
            <th>Quantité en stock</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Lignes de données des produits -->
          <tr>
            <td>Produit A</td>
            <td>10</td>
            <td>
              <!-- Boutons d'action pour chaque produit -->
              <button class="btn-edit"><i class="fas fa-edit"></i> Modifier</button>
              <button class="btn-delete"><i class="fas fa-trash"></i> Supprimer</button>
            </td>
          </tr>
          <!-- Ajoutez d'autres lignes de données si nécessaire -->
        </tbody>
      </table>
    </section>

    <section>
      <h2>Ajouter un produit</h2>
      <!-- Formulaire pour ajouter un produit -->
      <form id="form-ajout-produit">
        <div>
          <label for="nom-produit">Nom du produit :</label>
          <input type="text" id="nom-produit" name="nom-produit" required>
        </div>
        <div>
          <label for="quantite-stock">Quantité en stock :</label>
          <input type="number" id="quantite-stock" name="quantite-stock" required>
        </div>
        <!-- Ajoutez d'autres champs si nécessaire -->
        <button type="submit"><i class="fas fa-plus-circle"></i> Ajouter</button>
      </form>
    </section>
  </main>

  <footer>
    <!-- Pied de page -->
    <p>Gestion de stock - Tous droits réservés</p>
    <!-- Ajoutez d'autres éléments de pied de page si nécessaire -->
  </footer>
</body>
</html>