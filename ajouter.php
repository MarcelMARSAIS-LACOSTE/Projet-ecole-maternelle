	<!DOCTYPE html>
	<html>
		<head>
				<title>Ajouter</title>
				<link rel="stylesheet" href="test.css">
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<link rel="stylesheet" href="css/bootstrap-theme.min.css">
				<meta charset="utf-8">
		</head>

		<body>
			<div id="header" class="col-lg-12 centered">
				<div class="jumbotron">
				 <h1>Ecole maternelle Le Petit Prince</h1>
					<p>Ajouter un Article</p>     
				</div>
			</div>

		<div id="sideLeft" class="col-lg-2">
			<div class="sidenav">
			  <a href="affichage.php">Actualités</a>
			  <a href="#">Photos</a>
			  <a href="#">Contacts</a>
			  <a href="#">Gestion des articles</a>
			  <ul>
				  <li><a href="ajouter.php">Proposer un article</a></li>
				  <li><a href="affichage_directrice.php">Valider un article</a></li>
				  <li><a href="#">Gérer les article</a></li>
			  </ul>
			</div>
		</div>

		<div id="body" class="col-lg-8">
<form action="insert_bdd.php" method="post">
	<p>
	<h3> Titre article </h3>
		<input type="text" name="titre" />
		<br/>
	    <textarea name="contenu" le rows="8" cols="45"></textarea>

		<input type="submit" value="Valider" />
	</p>
</form>
		
		</div>
	</body>
  </html>
