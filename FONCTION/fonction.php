<?php
define('DNS', 'mysql:host=locahost;dbname;=elysammabase;port=3306;charset=utf8');
define('username', 'root');
define('passeword', '');

function get($entityName){
    require '../CONFIGURATION/config.php';
    $stmt = $pdo ->prepare ("SELECT * FROM $entityName" );
    $stmt -> execute();
    $all= $stmt -> fetchAll();
    return $all;
}
?>