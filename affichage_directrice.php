<head>
	<title>Affichage</title>
	<link rel="stylesheet" href="affichage.css">
</head>

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
					<td><p><?php echo $row['texte'];     
					echo $row['identifiant_article']; ?></p><td>
					<input type="submit" value="<?php echo $row['identifiant_article']; ?>" name="val"/>
				</tr>
		</div>
	</form>
  <?php } ?>
  
