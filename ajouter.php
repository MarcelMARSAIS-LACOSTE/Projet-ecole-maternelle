<head>
	<title>Ajout_Article</title>
	<link rel="stylesheet" href="affichage.css">
</head>

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<form action="insert_bdd.php" method="post">
	<p>
	<h3> Titre article </h3>
		<input type="text" name="titre" />
		<br/>
	    <textarea name="contenu" le rows="8" cols="45">Contenu de l'article</textarea>
		<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


		<input type="submit" value="Valider" />
	</p>
</form>
		