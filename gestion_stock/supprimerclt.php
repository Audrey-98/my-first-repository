<?php
require '../CONFIGURATION/config.php';

if (isset($_GET['supprimerid'])){
    $id_clt=$_GET['supprimerid'];
//requette sql de suppression

$sql="delete from client where id_clt=$id_clt";
$result= mysqli_query($conn, $sql);
if ($result){
//echo "suppression reussi";
    header('location:listeCLT.php');
}else{
    die(mysqli_error($conn));
} 
}
?>