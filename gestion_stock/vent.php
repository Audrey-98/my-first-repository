<!DOCTYPE html>
<html>
<head>
  <title>Achat de produit</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Achat de produit</h1>

  <form action="process_purchase.php" method="POST">
    <label for="product">Produit :</label>
    <select id="product" name="product">
      <optgroup label="Catégorie 1">
        <option value="produit1">Produit 1</option>
        <option value="produit2">Produit 2</option>
      </optgroup>
      <optgroup label="Catégorie 2">
        <option value="produit3">Produit 3</option>
        <option value="produit4">Produit 4</option>
      </optgroup>
    </select>
    <br>
    <label for="quantity">Quantité :</label>
    <input type="number" id="quantity" name="quantity" required>
    <br>
    <input type="submit" value="Acheter">
  </form>

  <script src="script.js"></script>
</body>
</html>