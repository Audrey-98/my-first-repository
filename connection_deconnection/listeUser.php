<?php
require '../CONFIGURATION/config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    
    <title>liste des utilisateurs</title>
</head>
<body>

<?php include_once ("../dossier_inclusion/header.php");?>
    <div class="container" >
        <h1> liste des utilisateurs</h1>
      
        <button class="btn btn-primary bg-primary my-5 " style="color:white;"><a href="inscription.php"> ajouter</a></button>
        <table class="table table-bordered table-striped">
  <thead>
  <tr class="bg-info">
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
            <button class="btn btn-primary"><a href="modifier.php? modifierid='.$id.'" class="text-light"><i class="fas fa-edit"></i></a></button>
            <button  class="btn btn-danger"><a href="supprimer.php? supprimerid='.$id.'" class="text-light"><i class="fas fa-trash"></i></a></button>
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