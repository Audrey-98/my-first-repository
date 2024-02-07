<?php
require '../CONFIGURATION/config.php';


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../STYLE/liste.css"/>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.min.css">
    <title>Enregistrement des Ventes</title>
    <link rel="stylesheet" href="styles.css">
</head>
    
<body>

<?php include_once ("../dossier_inclusion/header.php");?>

    <div id="sales">
        <div id="sales-header">
            <h1>Enregistrement des Ventes</h1>
        </div>

  
     <div style="padding-left:100px; padding-right:100px; "class="home-content">
    <table class=" table table-bordered">
        <thead style="background-color: rgb (130, 106, 251); color: #fff;">

       <tr>
       
        <th scope="col">client</th>
        <th scope="col">produit</th>
        <th scope="col">quantite</th>
        <th scope="col">prix unitaire</th>    
        <th scope="col">total</th>
       </tr>
       <?php
        foreach (get("vente") as $vente):;  
    ?>
    <tr>
        <td>$vente-> id_vent </td>
        
        <td>$vente -> client</td>
        <td>$vente -> produit</td>
        <td>$vente -> qte</td>
        <td>$vente -> prix_unitaire</td>
        <td>$vente -> total</td>
       
    </tr>
<?php endforeach?>
    <script src="script.js"></script>
    </table>
    </div>
</body>
</html>
