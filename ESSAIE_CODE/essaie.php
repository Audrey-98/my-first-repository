<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page avec Bootstrap</title>
    <!-- Ajoutez le lien vers la bibliothèque Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <!-- Une rangée (row) qui contient des colonnes -->
    <div class="row">
        <!-- Première colonne (col-md-6 pour les écrans de taille moyenne et supérieure) -->
        <div class="col-md-4">
            <h2>Colonne 1</h2>
            <p>Contenu de la première colonne.</p>
        </div>

        <!-- Deuxième colonne (col-md-6 pour les écrans de taille moyenne et supérieure) -->
        <div class="col-span-4">
            <h2>Colonne 2</h2>
            <p>Contenu de la deuxième colonne.</p>
        </div>
    </div>
</div>
<!-- Control the column width, and how they should appear on different devices -->

<!-- Ajoutez le lien vers la bibliothèque Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
