<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../STYLE/login.css">
    <title>Document</title>
</head>
<body>
    <div class="center">
        <h1>connectez vous..</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text"name="username" required>
                <span></span>
                <label>Utilisateur</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Mot de passe</label>
            </div>
           <div  class="pass"><a href="#">mot de passe oublier? </a></div>
            <input type="submit" value="connecter">
            <div class="inscription">
                creer un compte? <a href="inscription.php"> inscription</a>
            </div>
            

        </form>
    </div>
</body>
</html>