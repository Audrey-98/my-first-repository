const inputProduit = document.getElementById('produit');
const quantite= document.querySelector ("#quantite")
let prix
// Ajouter un écouteur d'événements pour l'événement input
inputProduit.addEventListener('input', () => {
    // Fonction à exécuter lorsque le contenu de l'input change
    console.log('Contenu de l\'input produit a changé:', inputProduit.value);
   
    const selectOption =select.selectOptions[0];
    prix= inputPrix.getAttribute("prix")
    console.log(prix)
});
quantite.addEventListener('input',(e)=>{
    const curentValue = e.target.value
    console.log(curentValue)


})
