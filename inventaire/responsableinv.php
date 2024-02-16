<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="../STYLE/resp.css">
    
    <title>responsable</title>
</head>
<body>
<?php include_once ("../dossier_inclusion/header.php");?>
    <div class="justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-sm rounded-lg">
                <div class="card-body">
                    <form id="panne-form">
                        <div class="mb-3">
                            <label for="responsable" class="form-label"> responsable de l'iventaire </label>
                            <select class="form-select"  id="responsable" name="responsable" required>
                                <option value=""> selectionner un employé </option>
                                <option value="utilisateur1">utiliateur1</option>
                                <option value="utilisateur2">utiliateur2</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-info"> valider</button>
                            <button type="submit" class="btn btn-info"> annuler</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>