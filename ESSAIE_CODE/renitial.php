<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation de mot de passe</title>
</head>
<body>
    <div class="panel-body">
        <form id="resetPasswordForm">
            <div class="panel-heading">Réinitialisation de mot de passe</div>
            <label for="password">Nouveau mot de passe : <input type="password" id="password" name="password" required></label><br>
            <label for="confirmPassword">Confirmer le nouveau mot de passe : <input type="password" id="confirmPassword" name="confirmPassword" required></label><br>
            <button type="submit">Réinitialiser le mot de passe</button>
        </form>
    </div>
    

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var form = document.getElementById("resetPasswordForm");

            form.addEventListener("submit", function (event) {
                event.preventDefault();

                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("confirmPassword").value;

                if (password === confirmPassword) {
                    // Envoyez les données du formulaire pour réinitialiser le mot de passe
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "reset_password.php", true);
                    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            alert(xhr.responseText); // Affiche la réponse du serveur
                        }
                    };

                    // Envoi des données
                    xhr.send("password=" + encodeURIComponent(password));
                } else {
                    alert("Les mots de passe ne correspondent pas.");
                }
            });
        });
    </script>
</body>
</html>
