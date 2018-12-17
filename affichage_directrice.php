	<!DOCTYPE html>
	<html>
		<head>
				<title>Articles à valider</title>
				<link rel="stylesheet" href="test.css">
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<link rel="stylesheet" href="css/bootstrap-theme.min.css">
				<meta charset="utf-8">
		</head>

		<body>
			<div id="header" class="col-lg-12 centered">
				<div class="jumbotron">
				 <h1>Ecole maternelle Le Petit Prince</h1>
					<p>Articles à valider</p>     
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
<?php
	define('DB_HOST','localhost');
	define('DB_PORT','3306');
	define('DB_DATABASE','php_ecole');
	define('DB_USERNAME','comptetest');
	define('DB_PASSWORD','SJzEeqLb2HHeNYVV');
	
try
	{
		$PDO_BDD = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_DATABASE,DB_USERNAME,DB_PASSWORD);
		$PDO_BDD->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$PDO_BDD->exec("SET NAMES 'utf8'");
	}
	catch(Exception $e)
	{
		echo 'Erreur : '.$e->getMessage().'<br/>';
		echo 'N° : ' .$e->getCode();
		exit();
	}
	
	$query= "SELECT * FROM article WHERE etat_article=1;";
	try
	{
		$pdo_select= $PDO_BDD->prepare($query);
		$pdo_select->execute();
		$NBlignes = $pdo_select->rowCount();
		$rowAll = $pdo_select->fetchAll();
	} catch (PDOExpection $e){ echo "CA MARCHE PAS"; die();}
			foreach ( $rowAll as $row )
		{
	?>
	<form action="valider_article.php" method="post">
		<div id="article">
				<tr>
					<td><div id="titre_article"><?php echo $row['titre'];?></div>
					<?php echo $row['date_publication']?>
					<td><p><?php echo $row['texte'];?></p><td>
					<input type="hidden" name="foo" value="<?php echo $row['identifiant_article'];?>"/>
					<input type="submit" name="val" value="Valider l'article"/>
				</tr>
		</div>
	</form>
  <?php } ?>
  	</div>
	</body>
  </html>

  