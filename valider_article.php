<?php
	date_default_timezone_set('Europe/Paris');
	
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
	$query="SELECT * FROM `article` WHERE `identifiant_article`= (SELECT max(`identifiant_article`) FROM `article`)";
	$temp=0;
	try
	{
		$pdo_select= $PDO_BDD->prepare($query);
		$pdo_select->execute();
		$NBlignes = $pdo_select->rowCount();
		$rowAll = $pdo_select->fetchAll();
	} catch (PDOExpection $e){ echo "CA MARCHE PAS"; die();}

		$id_article=$_POST['foo'];
		echo  $id_article;
		$query= "UPDATE `php_ecole`.`article` SET `etat_article` = '3' WHERE `article`.`identifiant_article` = $id_article";
		try
		{
			$pdo_select= $PDO_BDD->prepare($query);
			$pdo_select->execute();
		} catch (PDOExpection $e){ echo "CA MARCHE PAS"; die();}

		header('Location: affichage_directrice.php');
  exit();
?>	
	