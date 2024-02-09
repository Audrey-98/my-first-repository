function showAlert(message) {
    var alertMessage = document.getElementById('alert-message');
    alertMessage.textContent = message;
    alertMessage.style.display = 'block';
    // Faire défiler vers le haut de la page pour que l'utilisateur voie le message
    window.scrollTo(0, 0);
}
