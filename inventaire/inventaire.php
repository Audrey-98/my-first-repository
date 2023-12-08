<!DOCTYPE html>
<html>
<head>
  <title>Inventaire des produits</title>
  <link rel="stylesheet" type="text/css" href="../style/inentaire.css">
</head>
<body>
  <h1>Inventaire des produits</h1>

  <div id="product-list">
    <!-- La liste des produits sera générée dynamiquement en utilisant PHP -->
  </div>
  

  <script src="script.js">// Fonction pour supprimer un produit de l'inventaire
function deleteProduct(productId) {
  // Ici, vous pouvez ajouter la logique pour supprimer le produit de la base de données
  // ou effectuer toute autre opération nécessaire

  // Supprimer l'élément HTML correspondant au produit
  var productElement = document.getElementById(productId);
  if (productElement) {
    productElement.remove();
  }
}

// Exemple de données d'inventaire (peut être remplacé par des données réelles provenant d'une base de données)
var inventoryData = [
  { id: 1, name: "Produit 1", price: 10.99, quantity: 5 },
  { id: 2, name: "Produit 2", price: 19.99, quantity: 8 },
  { id: 3, name: "Produit 3", price: 7.5, quantity: 12 },
];

// Générer la liste des produits en utilisant les données d'inventaire
var productList = document.getElementById("product-list");
inventoryData.forEach(function(product) {
  var productElement = document.createElement("div");
  productElement.id = product.id;
  productElement.className = "product";

  var heading = document.createElement("h2");
  heading.textContent = product.name;

  var price = document.createElement("p");
  price.textContent = "Prix : $" + product.price.toFixed(2);

  var quantity = document.createElement("p");
  quantity.textContent = "Quantité : " + product.quantity;

  var deleteButton = document.createElement("button");
  deleteButton.className = "btn-delete";
  deleteButton.textContent = "Supprimer";
  deleteButton.addEventListener("click", function() {
    deleteProduct(product.id);
  });

  productElement.appendChild(heading);
  productElement.appendChild(price);
  productElement.appendChild(quantity);
  productElement.appendChild(deleteButton);

  productList.appendChild(productElement);
});</script>
</body>
</html>