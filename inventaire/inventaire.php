<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventaire</title>
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.min.css">
 
</head>
<body>
<?php include_once ("../dossier_inclusion/header.php");?>
  <!--Contenu principal-->
  <div class="main-content">
    <div class="row justify-content-between">
      <div class="col-auto">
        <h1 class="text-center">Inventaire</h1>
      </div>
      <div class="col-lg-6 text-lg-end">
        <a href="../INVENTAIRE/lencerinventaire.php"><button type="button" class="btn btn-primary my-5" style="background-color: #007bff;">
          <i class="fas fa-plus"></i> Lancer l'inventaire
        </button></a>
      </div>
    </div>
  
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
          <tr class="bg-info">
            <th>ID de l'inventaire</th>
            <th>Date de l'inventaire</th>
            <th>Inventaire lancé par</th>
            <th>Statut</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>2023-12-31</td>
            <td>Kuito Ange</td>
            <td>Terminé</td>
            <td>
              <a href="#" title="Modifier"><i class="fas fa-edit"></i></a>
              <a href="#" title="Supprimer"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>2023-12-30</td>
            <td>Ouandji Lugresse</td>
            <td>En cours <a href="effectuer_inventaire.html"> <i class="fas fa-clipboard-list" title="Effectuer l'inventaire"></i></a></td>
            <td>
              <a href="#" title="Modifier"><i class="fas fa-edit"></i></a>
              <a href="#" title="Supprimer"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
          <!-- Ajoutez d'autres lignes d'inventaire si nécessaire -->
        </tbody>
      </table>
    </div>
  </div>
  </body>
</html>
 
   