<?php
$link = mysqli_connect("localhost", "root", "", "mabase");
/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    echo("Échec de la connexion :" . mysqli_connect_error());
    exit();
}

?>