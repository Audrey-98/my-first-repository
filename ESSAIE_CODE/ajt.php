<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Ajouter un produit</title>
		<link rel="stylesheet" type="text/css" href="../style/ajt.css" />
	</head>
   
	<body id="panel_ajout">
		<section>
			<div id="menu">
				<a href="index.php">
					Liste des produits
				</a>
			</div>
			

			<h1 id="title">
				Ajouter un produit
			</h1>
			<hr />

			<form name="form" method="POST" action="create.php">
				<fieldset>
					<legend>
						Informations sur le produit
					</legend>

					<p class="field">
						<label for="id_pro">
							Entrez l'ID du produit
						</label>
						<br />
						<input type="text" name="id_pro" id="id_pro" required />
					</p>

					<p class="field">
						<label for="reference">
							reference
						</label>
						<br />
						<input type="text" name="reference" id="reference" required  />
					</p>

					<p class="field">
						<label for="categorie">
							categorie
						</label>
						<br />
						<input type="categorie" name="categorie" id="categorie" required />
					</p>
                    <p class="field">
						<label for="nom_pro">
						nom du produit
						</label>
						<br />
						<input type="text" name="nom_pro" id="nom_pro" required />
					</p>

                    <p class="field">
						<label for="stockinit">
							stock initial
						</label>
						<br />
						<input type="number" name="stockinit" id="stockinit" required value="1" />
					</p>
                    <p class="field">
						<label for="stkalert">
							stock d'alert
						</label>
						<br />
						<input type="number" name="stkalert" id="stkalert" required value="1" />
					</p>


					<p class="field">
						<label for="dateproduit">
							Sélectionnez la date
						</label>
						<br />
						<input type="date" name="dateproduit" id="dateproduit" required />
					</p>

					<p class="buttons">
						<input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer" />
					</p>
				</fieldset>
			</form>
		</section>


		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>