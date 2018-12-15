<head>
<style>
  body { background: url(Images/background-default.jpg) no-repeat !important; }
  .center { margin: auto; width: 50%; border: 3px solid green; padding: 10px; }

</style>
</head>

<body>
<div class="jumbotron" id="center">
  <div class="container">
    <h1><?=$title?></h1>
    <p>Se connecter à son espace personnel</p>
  </div>
</div>
<div class="container">
	<form action="connexion.php" method="post">
    Mail: <input type="text" name="mail" value="" />
     
    Mot de passe: <input type="password" name="mdp" value="" />
     
    <input type="submit" name="connexion" value="Connexion" />
</form>

<p> Pas encore de compte? Demandez en sa création via l'IUT d'Arles </p>



	<p>	</p>
  <?php echo anchor('index.php/page',"acceuil")?>
</div>

</body>