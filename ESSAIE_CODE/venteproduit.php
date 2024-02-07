<!DOCTYPE html>
<html>
<head>
  <title>vente</title>
  <link rel="stylesheet" type="text/css" href="../style/achat.css">
</head>
<body>
<?php include_once ("../dossier_inclusion/header.php");?>
<div class="home-content">
  <section style="margin: auto;" class="container">

</div>
 <h1> effectuer nouvelle vente </h1>
 <form method="POST" action="#" class="form">
  <?php if (!empty($message_success)):?>
    <div class="alert-alert-success">
      <?$message_success?>
    </div>
    <?php endif ?>

    <?php if (!isset($message)):?>
    <div class="alert-alert-danger">
      <?$message?>
    </div>
    <?php endif ?>

    <div class="prod">
  <label>produit</label>
  <select name="produit">     
  <option value="">papaye</option>
      <option value="">ananas</option> 
    </select>
    </div>

    <div class="clt">
    </br><label> client</label>
   <select name="client">
   <option value="">audrey</option>
      <option value="">alima</option> 
  <div class="colum">
  <div class="select-box">  
    </select>
    </div>

    <div class="input-box">
    <label >quantite </label></br>
    <input name="qte" placeholder="quantite" required value="1">
    </div>
    <div class="input-box">
    <label >prix </label></br>
    <input type="number" name="prix" placeholder="prix "></br>
   <input type="date" name="date" placeholder="date vente "/>
    <button type="submit" name="motif" >valider la vente</button> </br>
    </div>
</form>

 