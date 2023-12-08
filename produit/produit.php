<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style/produit.css"/>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <title>page_produit</title>
</head>
<body>
<?php include_once ("../dossier_inclusion/header.php");?>
    <h2 class="text-info"> <U>NOS PRODUITS</U></h2>

    <button class="bg-warning  " type="submit"><a href="ajoutproduit.php"><i class="fas fa-plus-circle"></i> Ajouter un prodit</button></a>

    <table class="table  table-bordered">
        <thead>
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
            <td><button onclick="afficherConfirmation(1)"><i class="fas fa-trash-alt"></i><span class="icon-separator">|</span><i class="fas fa-pencil-alt"></i></button>
        

  
  <script>
    function afficherConfirmation(idProduit) {
      Swal.fire({
        title: "Confirmation de suppression",
        text: "Voulez-vous vraiment supprimer le produit avec l'ID " + idProduit + " ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Annuler",
        cancelButtonText: "Supprimer"
      }).then((result) => {
        if (result.isConfirmed) {
          supprimerProduit(idProduit);
        }
      });
    }

    function supprimerProduit(idProduit) {
      // Effectuer la suppression du produit avec l'ID spécifié
      // Remplacez cette ligne par votre propre logique de suppression

      console.log("Suppression du produit avec l'ID " + idProduit);
    }
    
  </script>

          </td>
          </tr>
          <tr >
            <th scope="row">2</th>
            <td>Jacob</td>
            <td></li></td>
            <td>@fat</td>
          </tr>
                </tbody>
      </table>
      
 
</body>
<?php
include_once ("../dossier_inclusion/footer.php");
?>
</html>