<?php
require '../CONFIGURATION/config.php';

if (isset($_GET['supprimerid'])){
    $id=$_GET['supprimerid'];
//requette sql de suppression

$sql="delete from utilisateur where id=$id";
$result= mysqli_query($conn, $sql);
if ($result){
    //echo "suppression reussi";
    header('location:listeUser.php');
}else{
    die(mysqli_error($conn));
} 
}
?>