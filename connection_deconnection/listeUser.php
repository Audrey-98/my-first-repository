<?php
require '../CONFIGURATION/config.php'
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
    <title>liste des utilisateurs</title>
</head>
<body>
    <div class="container" >
        <h1> liste des utilisateurs</h1>
        <button class="btn btn-primary bg-primary my-5"><a href="inscription.php"> ajouter</a></button>
        <table class="table  table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">pseudo</th>
      <th scope="col">mot de passe</th>
      <th scope="col">type de compte</th>
      <th scope="col">action</th>
      
      
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from `utilisateur`";
    $result= mysqli_query($conn,$sql);
    if ($result){
        while($row= mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $Nom=$row['nom'];
            $prenom=$row['prenom'];
            $pseudo=$row['pseudo'];
            $mot_de_passe=$row['mot_de_passe'];
            $user_type=$row['user_type'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$Nom.'</td>
            <td>'.$prenom.'</td>
            <td>'.$pseudo.'</td>
            <td>'.$mot_de_passe.'</td>
            <td>'.$user_type.'</td>
            <td>
            <button class="btn btn-primary"><a href="modifier.php? modifierid='.$id.'" class="text-light">modifier</a></button>
            <button  class="btn btn-danger"><a href="supprimer.php? supprimerid='.$id.'" class="text-light">supprimer</a></button>
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