
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
 
  <title>page d'acccueil</title>
</head>

<?php include_once ("../dossier_inclusion/header.php");?>
  <!--Container Main start-->

  <!--Container Main end-->
  <p>Bienvenue dans notre application de gestion de stock !<br>
    Nous sommes ravis de vous accueillir et de vous offrir <br>une solution efficace pour gérer vos stocks de manière
    simple et intuitive.</p>
  <div class="container">
    <div class="row ">
      <div class="col bg-info me-4"><i class="fas fa-user-plus"></i>
        Nouveau Client
      </div>
      <div class="col bg-warning me-4 ">
        <i class="fas fa-chart-line"></i>
        nombre <br>de vente
      </div>
      <div class="col bg-primary me-4">
        <i class="fas fa-cash-register"></i>
        effectuer <br>une vente
      </div>
      <div class="col bg-success me-4">
        <i class="fas fa-search"></i>
        rechercher<br> un client
      </div>
    </div>
  </div>
  <h3><u>Nos produits</u></h3>
  <div class="recent-activities">
            <h2>Dernières Activités</h2>
            <ul id="activitiesList"></ul>
        </div>
        <h2>Laissez un commentaire</h2>
    <form id="commentForm">
        

        <label for="comment">Commentaire:</label><br>
        <textarea id="comment" name="comment" rows="2" required></textarea><br>

        <button type="button" onclick="submitComment()">Envoyer </button>
    </form>

    <div id="commentsList">

  <script src="../js/home.js"></script>
</body>

</html>