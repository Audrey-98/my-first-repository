<?php

if (isset($_POST['submit'])){

    $id_clt= htmlspecialchars($_POST['client']);
    $id_pro= htmlspecialchars($_POST['produit']);
    $quantite= htmlspecialchars($_POST['quantite']);
    $prix_total= htmlspecialchars($_POST['prix']);

    If(!empty($id_clt) && !empty($id_pro) && !empty($quantite) && !empty($prix_total)){

        if (empty($message)){
            $table ="vente";
            $columns = ["$id_clt, $id_pro, $quantite, $prix_total"];
            $values = [$id_clt, $id_pro, $quantite,$prix_total];
            inserIntoDatabase($table, $colums, $values);
            $message_sucess = "nouvelle vente ajouter avec success";
    
        }
    

    }else{
        $message = "veuillez remplir tout les champs";
    }
}
?>

<button type="button" id="addProduct" >Ajouter Produit</button>
        
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="bg-info">
                    <th>id</th>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
    <?php
    require '../CONFIGURATION/config.php';
    $sql="select * from `vente`";
    $result= mysqli_query($conn,$sql);
    if ($result){
        while($row= mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $produit=$row['produit'];
            $quantite=$row['quantite'];
            $prixunitaire=$row['prixunitaire'];
            $total=$row['total'];
            
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$produit.'</td>
            <td>'.$quantite.'</td>
            <td>'.$prixunitaire.'</td>
            <td>'.$total.'</td>
            <td>
            <button class="btn btn-primary"><a href="modifier.php? modifierid='.$id.'" class="text-light"><i class="fas fa-edit"></i></a></button>
            <button  class="btn btn-danger" ><a href="supprimerclt.php? supprimerid='.$id.' " class="text-light"><i class="fas fa-trash"></i></a></button>
        </td>
           
          </tr>';

        }
        

    }

    ?>
        </table>