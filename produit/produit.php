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

    <h2 class="text-info"> <U>NOS PRODUITS</U></h2>

    <button class="bg-warning  " type="submit"><a href="ajoutproduit.php"><i class="fas fa-plus-circle"></i> Ajouter un prodit</button></a>

    <table class="table table-bordered table-striped">
        <thead>
          <tr class="bg-info">
          <th scope="col">ID</th>
            <th scope="col">Reference</th>
            <th scope="col">Categorie</th>
            <th scope="col">nom produit</th>
            <th scope="col">quantite</th>
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
            $reference=$row['reference'];
            $categorie=$row['categorie'];
            $nom_pro=$row['nom_pro'];
            $quantite=$row['quantite'];
            $prix=$row['prix'];
            
            echo '<tr>
            <th scope="row">'.$id_pro.'</th>
            <td>'.$reference.'</td>
            <td>'.$categorie.'</td>
            <td>'.$nom_pro.'</td>
            <td>'.$quantite.'</td>           
            <td>'.$prix.'</td>
            <td>
            <button class="btn btn-primary"><a href="#? modifierid='.$id_pro.'" class="text-light"><i class="fas fa-edit"></i></a></button>
            <button  class="btn btn-danger" ><a href="#? supprimerid='.$id_pro.' " class="text-light"><i class="fas fa-trash"></i></a></button>
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