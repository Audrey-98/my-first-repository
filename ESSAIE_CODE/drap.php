<!-- Inclure Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- Votre structure de navigation -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- ... Vos autres éléments de navigation ... -->

        <!-- Dropdown pour le Tableau de bord -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dashboard-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tableau de bord
                </a>
                <div class="dropdown-menu" aria-labelledby="dashboard-dropdown">
                    <a class="dropdown-item" href="../page/menu.php">Sous-fonction 1</a>
                    <a class="dropdown-item" href="#">Sous-fonction 2</a>
                    <!-- Ajoutez d'autres liens de sous-fonctions selon vos besoins -->
                </div>
            </li>
        </ul>

        <!-- Dropdown pour le Catalogue -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="catalogue-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Catalogue
                </a>
                <div class="dropdown-menu" aria-labelledby="catalogue-dropdown">
                    <a class="dropdown-item" href="/produit/produit.php">Sous-fonction 1</a>
                    <a class="dropdown-item" href="#">Sous-fonction 2</a>
                    <!-- Ajoutez d'autres liens de sous-fonctions selon vos besoins -->
                </div>
            </li>
        </ul>

        <!-- Dropdown pour la Gestion de stock -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="stock-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Gestion de stock
                </a>
                <div class="dropdown-menu" aria-labelledby="stock-dropdown">
                    <a class="dropdown-item" href="../gestion_stock/venteproduit.php">Sous-fonction 1</a>
                    <a class="dropdown-item" href="#">Sous-fonction 2</a>
                    <!-- Ajoutez d'autres liens de sous-fonctions selon vos besoins -->
                </div>
            </li>
        </ul>

        <!-- Dropdown pour l'Inventaire -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="inventory-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Inventaire
                </a>
                <div class="dropdown-menu" aria-labelledby="inventory-dropdown">
                    <a class="dropdown-item" href="../inventaire/inventaire.php">Sous-fonction 1</a>
                    <a class="dropdown-item" href="#">Sous-fonction 2</a>
                    <!-- Ajoutez d'autres liens de sous-fonctions selon vos besoins -->
                </div>
            </li>
        </ul>

        <!-- ... Vos autres éléments de navigation ... -->
    </nav>
</header>

<!-- Inclure Bootstrap JavaScript (jQuery requis) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
