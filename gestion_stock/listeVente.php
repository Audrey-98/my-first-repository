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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Enregistrement des Ventes</title>
    <link rel="stylesheet" href="styles.css">
</head>
    
<body>

<?php include_once ("../dossier_inclusion/header.php");?>

<div class="container" >
        <h1> liste des ventes</h1>
        <button class="btn btn-primary bg-primary my-5"> ajouter</button>
        <table class="table  table-bordered">

        <thead>
       <tr>
        <th scope="col">client</th>
        <th scope="col">produit</th>
        <th scope="col">quantite</th>
        <th scope="col">prix unitaire</th>    
        <th scope="col">total</th>
       </tr>

     </thead>
       <?php
    $sql="select * from `vente`";
    $result= mysqli_query($conn,$sql);
    if ($result){
        while($row= mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $id_client=$row['id_client'];
            $id_produit=$row['id_produit'];
            $quantite=$row['quantite'];
            $prix_total=$row['prix_total'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$id_client.'</td>
            <td>'. $id_produit.'</td>
            <td>'. $quantite.'</td>
            <td>'. $prix_total.'</td>
          </tr>';

        }
        

    }
    ?>
   
    <script src="script.js"></script>
    </table>
    
</body>
</html>
