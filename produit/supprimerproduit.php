
<!DOCTYPE html>
<html>
<head>
  <title>Supprimer un produit</title>
  <style>
    .confirmation-dialog {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>
<?php include_once ("../dossier_inclusion/header.php");?>
  <ul id="liste-produits">
    <li>Produit 1 <button onclick="afficherConfirmation(1)">Supprimer</button></li>
    <li>Produit 2 <button onclick="afficherConfirmation(2)">Supprimer</button></li>
    <li>Produit 3 <button onclick="afficherConfirmation(3)">Supprimer</button></li>
  </ul>

  <div id="confirmation-dialog" class="confirmation-dialog">
    <h3>Confirmation de suppression</h3>
    <p>Entrer l'ID du produit :</p>
    <input type="text" id="produit-id">
    <button onclick="supprimerProduit()">Supprimer</button>
    <button onclick="fermerConfirmation()">Annuler</button>
  </div>

  <script>
    function afficherConfirmation(idProduit) {
      var dialog = document.getElementById("confirmation-dialog");
      var produitIdInput = document.getElementById("produit-id");
      produitIdInput.value = idProduit;
      dialog.style.display = "block";
    }

    function fermerConfirmation() {
      var dialog = document.getElementById("confirmation-dialog");
      dialog.style.display = "none";
    }

    function supprimerProduit() {
      var produitIdInput = document.getElementById("produit-id");
      var idProduit = produitIdInput.value;
      
      // Envoyer une requête AJAX ou effectuer un traitement PHP pour supprimer le produit avec l'ID spécifié

      // Exemple d'affichage d'un message de confirmation
      alert("Produit avec l'ID " + idProduit + " supprimé avec succès.");

      fermerConfirmation();
    }
  </script>
</body>
</html>