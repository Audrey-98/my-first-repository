<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.min.css">
    <title>Document</title>
</head>
<body>
<?php include_once ("../dossier_inclusion/header.php");?>
<div class="main-content">
    <h1>Inventaire - effectuer inventaire</h1><br>
    <a href="./inventaire.html"><i class="fas fa-arrow-circle-left" style="color: rgba(83, 87, 146, 1);"></i></a>
  
    <div class="row justify-content-between">
      <div class="col-auto">
        <p>Date de l'inventaire : <span id="date-inventaire">01/01/2024</span></p>
      </div>
      <div class="col-auto ml-auto">
        <p>Responsable de l'inventaire : <span id="responsable-inventaire">Kuito ange</span></p>
      </div>
    </div>
  
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card shadow-sm rounded-lg">
          <div class="card-body">
            <h2 class="text-center">Recherche par identifiant</h2>
            <div class="form-group">
              <label for="actif-search">Recherche du produit par identifiant</label>
              <div class="input-group">
                <input type="text" class="form-control" id="actif-search">
                <div class="input-group-append">
                  <span class="input-group-text search-button" onclick="ouvrirFormulaireAjoutproduit()">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
              </div>
            </div>
            <div id="actif-info-container" style="display: none;">
              <p><strong>Identifiant:</strong> <span id="produit-identifiant"></span></p>
              <p><strong>Reference:</strong> <span id="produit-reference"></span></p>
              <p><strong>Categorie:</strong> <span id="produit-categorie"></span></p>
              <p><strong>Nom produit:</strong> <span id="produit-nom"></span></p>
              <p><strong>prix:</strong> <span id="produit-prix"></span></p>
              <p><strong>quantite en stock:</strong> <span id="produit-quantite"></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div id="form-ajouter-produit-container" class="row justify-content-center" style="display: none;">
      <div class="col-lg-6">
        <div class="card shadow-sm rounded-lg">
          <div class="card-body">
            <h2 class="text-center">verification en stock</h2>
            <form class="produit-form" onsubmit="validerAjoutproduit(); return false;">
              <div id="produit-info-container-formulaire">
              <p><strong>identifiant</strong> <span id="produit-identifiant-formulaire"></span></p>
                <p><strong>reference</strong> <span id="produit-reference-formulaire"></span></p>
                <p><strong>categorie</strong> <span id="produit-categorie-formulaire"></span></p>
                <p><strong>nom produit</strong> <span id="produit-nom-formulaire"></span></p>
                <p><strong>prix</strong> <span id="produit-prix-formulaire"></span></p>
                <p><strong>quantite</strong> <span id="produit-quantite-formulaire"></span></p>
                
               
              </div>
              <div class="form-group">
                <label for="etat-produit">État du produit</label>
                <select class="form-control" id="etat-produitf">
                  <option value="enstock">En stock</option>
                  <option value="fini">fini</option>
                  <option value="stock alert">alert</option>

                </select>
              </div>
              <div class="form-group">
                <label for="observation">Observation</label>
                <textarea class="form-control" id="observation" rows="3"></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Valider</button>
                <button type="button" class="btn btn-secondary" onclick="annulerAjoutproduit()">Annuler</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
    <div class="table-responsive">
      <table id="table-produit" class="table table-striped">
        <thead>
          <tr class="bg-info" >
            <th>identifiant </th>
            <th>Reference</th>
            <th>Categorie</th>
            <th>Nom produit</th>
            <th>Stock initial</th>
            <th>Stock d alerte</th>
            <th>Prix</th>
            <th>Observation</th>

            <th>Actions</th> <!-- Nouvelle colonne pour les icônes Modifier et Supprimer -->
          </tr>
        </thead>
        <tbody>
          <!-- Les lignes du tableau seront insérées ici -->
        </tbody>
      </table>
    </div>
  
    <button id="btn-terminer-inventaire" class="btn btn-primary" style="background-color: rgba(83, 87, 147, 1);">Terminer l'inventaire</button>
  </div>
  <script>
    function validerAjoutproduit() {
      // Récupérer les valeurs des champs du formulaire
      var identifiant = document.getElementById('produit-identifiant-formulaire').textContent;
      var reference = document.getElementById('produit-reference-formulaire').textContent;
      var categorie = document.getElementById('produit-categorie-formulaire').textContent;
      var nom = document.getElementById('produit-nom-formulaire').textContent;
      var prix = document.getElementById('produit-prix-formulaire').textContent;
      var quantite = document.getElementById('produit-quantite-formulaire').textContent;
      var etatproduit = document.getElementById('etat-produit').value;
      var observation = document.getElementById('observation').value;
  
      // Réinitialiser les champs du formulaire
      document.querySelector('.produit-form').reset();
  
      // Masquer le formulaire d'ajout d'actif
      document.getElementById('form-ajouter-produit-container').style.display = 'none';
  
      // Insérer une nouvelle ligne dans le tableau
      var table = document.getElementById('table-produit');
      var newRow = table.insertRow();
  
      // Insérer les cellules avec les valeurs correspondantes
      var identifiantCell = newRow.insertCell();
      identifiantCell.textContent = identifiant;
  
      var referenceCell = newRow.insertCell();
      referenceCell.textContent = reference;
  
      var categorieCell = newRow.insertCell();
      categorieCell.textContent = categorie;
  
      var nomCell = newRow.insertCell();
      nomCell.textContent = nom;
  
      var prixCell = newRow.insertCell();
      prixCell.textContent = prix;
  
      var quantiteCell = newRow.insertCell();
      quantiteCell.textContent = quantite;

      var etatproduitCell = newRow.insertCell();
      etatproduitCell.textContent = etatproduit;
  
      var observationCell = newRow.insertCell();
      observationCell.textContent = observation;

      var actionsCell = newRow.insertCell();
      actionsCell.innerHTML = '<i class="fas fa-edit " title="Modifier"></i> <i class="fas fa-trash" title="Supprimer"></i>';
    }
  
    function ouvrirFormulaireAjoutproduit() {
      // Afficher le formulaire d'ajout d'actif
      document.getElementById('form-ajouter-produit-container').style.display = 'block';
    }
  
    function annulerAjoutproduit() {
      // Réinitialiser les champs du formulaire
      document.querySelector('.produit-form').reset();
  
      // Masquer le formulaire d'ajout d'actif
      document.getElementById('form-ajouter-produit-container').style.display = 'none';
    }
  </script>
  
</body>
</html>