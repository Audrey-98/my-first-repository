<?php
require '../CONFIGURATION/config.php';
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
          <th scope="col">ID</th>
            <th scope="col">Reference</th>
            <th scope="col">Categorie</th>
            <th scope="col">nom produit</th>
            <th scope="col">stock initial</th>
            <th scope="col">stock alerte</th>
            <th scope="col">Prix</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        
        <?php
    $sql="select * from `produit`";
    $result= mysqli_query($conn,$sql);
    if ($result){
        while($row= mysqli_fetch_assoc($result)){
            $id_pro=$row['id_pro'];
            $Reference=$row['Reference'];
            $Categorie=$row['Categorie'];
            $Nom_pro=$row['Nom_pro'];
            $stockinit=$row['stockinit'];
            $stkalert=$row['stkalert'];
            $Prix=$row['Prix'];
            
            echo '<tr>
            <th scope="row">'.$id_pro.'</th>
            <td>'.$Reference.'</td>
            <td>'.$Categorie.'</td>
            <td>'.$Nom_pro.'</td>
            <td>'.$stockinit.'</td>
            <td>'.$stkalert.'</td>
            <td>'.$Prix.'</td>
            <td>
            <button class="btn btn-primary"><a href="#? modifierid='.$id_pro.'" class="text-light">modifier</a></button>
            <button  class="btn btn-danger" ><a href="#? supprimerid='.$id_pro.' " class="text-light">supprimer</a></button>
        </td>
           
          </tr>';

        }
        

    }

    ?>
    
        </tbody>        

  
  <script>
   

   
  </script>

          
      </table>
      
 
</body>
<?php
include_once ("../dossier_inclusion/footer.php");
?>
</html>