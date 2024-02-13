<?php
require '../CONFIGURATION/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>liste des client</title>
</head>
<body>
<?php include_once ("../dossier_inclusion/header.php");?>
    <div class="container" >
        <h1> liste des Clients</h1>
        <button class="btn btn-primary bg-primary my-5"><a href="client.php"> ajouter</a></button>
        <table class="table  table-bordered">
  <thead>
    <tr>
      <th scope="col">id client</th>
      <th scope="col">Nom</th>
      <th scope="col">Telephone</th>
      <th scope="col">Action</th>
     
      
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from `client`";
    $result= mysqli_query($conn,$sql);
    if ($result){
        while($row= mysqli_fetch_assoc($result)){
            $id_clt=$row['id_clt'];
            $nom=$row['nom'];
            $telephone=$row['telephone'];
            
            echo '<tr>
            <th scope="row">'.$id_clt.'</th>
            <td>'.$nom.'</td>
            <td>'.$telephone.'</td>
            <td>
            <button class="btn btn-primary"><a href="modifier.php? modifierid='.$id_clt.'" class="text-light">modifier</a></button>
            <button  class="btn btn-danger" ><a href="supprimerclt.php? supprimerid='.$id_clt.' " class="text-light">supprimer</a></button>
        </td>
           
          </tr>';

        }
        

    }

    ?>
    
  </tbody>
</table>
    </div>
    
</body>
</html>