<head>
	<title>Ajout_Article</title>
	<link rel="stylesheet" href="affichage.css">
</head>

<form action="insert_bdd.php" method="post">
	<p>
	<h3> Titre article </h3>
		<input type="text" name="titre" />
		<br/>
		<textarea name="contenu" rows="8" cols="45"> Contenu de l'article </textarea>
		<input type="submit" value="Valider" />
	</p>
</form>
	