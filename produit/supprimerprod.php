<?php
require '../CONFIGURATION/config.php';

if (isset($_GET['supprimerid'])){
    $id_pro=$_GET['supprimerid'];
//requette sql de suppression

$sql="delete from produit where id_pro = $id_pro";
$result= mysqli_query($conn, $sql);
if ($result){
//echo "suppression reussi";
    header('location:produit.php');
}else{
    die(mysqli_error($conn));
} 
}
?>