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