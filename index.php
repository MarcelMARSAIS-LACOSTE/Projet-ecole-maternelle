<?php include('head.inc.php'); ?>

<body style="background: url(Images/background-default.jpg) no-repeat !important; position: relative ; font-size: calc(12px + 1vw)">
<div style=" position:relative; margin: auto; max-width: 75% ;width: auto;   border: 3px solid green;  padding: 70px 0; text-align: center ;background:rgba(250,250,250,0.7); color:black; overflow:auto">
	<div id="logo" style="overflow:auto; margin-top: none"> <h1 style="position: relative; font-size: calc(12px + 3vw);display:left"> Ecole maternelle le Petit Prince  <img src="Images/petitprince1.jpg" alt="logo de l'ecole maternelle" style="position: relative ;width: auto; max-height:25vh"></h1> </div>
	<h2 style="margin: 15px; font-size: calc(12px + 1.7vw)"> Connectez-vous  </h2> 
	<form id="connexion" method="post" action="connexion_code.php"> <fieldset>
	<input type='hidden' name='submitted' id='submitted' value='1'/>
	<input type='hidden' name='submitted' id='submitted' value='1'/>
	<label for='username' >Nom d'utilisateur :</label>
	<input type='text' name='username' id='username'  maxlength="50" style = "margin:10px"/> <br>
	<label for='password'  >Mot de passe :</label>
	<input type='password' name='password' id='password' maxlength="50" style="margin:10px"/> <br>
	<input type='submit' name='Connexion' value='Connexion' style = "margin:10px ; background: rgb(58,232,72); /* Green */ border: none;
  padding: 5px 5px;
  text-align: center; border-radius: 4px;
  text-decoration: none;
  display: inline-block; color:white;
  font-size: 16px;"/>
  <?php
  if(isset($_GET['erreur'])) {
  	$err = $_GET['erreur'];
  	if($err==1)
  		echo "<p style='color:red'>Utilisateur ou mot de passe inconnu </p>";
  	if($err==2)
  		echo "<p style='color:red'>Les champs ne doivent pas être vide </p>";
  }
  ?>
	</fieldset> </form>
</div>
</body>
