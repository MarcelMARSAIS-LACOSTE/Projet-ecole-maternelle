<?php
    
        if(empty($_POST['username']))
        {
           echo "Entrez un nom d'utilisateur!";
            return false;
        }

        if(empty($_POST['password']))
        {
            echo "Entrez un mot de passe!";
            return false;
        }
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $mysqli = mysqli_connect("localhost", "php_ecole", "SJzEeqLb2HHeNYVV", "php_ecole");
        if(!mysqli)
        {
             echo "Erreur de connexion à la base de données.";
        } else {

                $Requete = mysqli_query($mysqli,"SELECT * FROM compte WHERE identifiant_compte = '".$username."' AND mot_de_passe = '".$password."'");//si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if(mysqli_num_rows($Requete) == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {
                    // on ouvre la session avec $_SESSION:
                    session_start();
                    $_SESSION['identifiant_compte'] = $username;

                    //$_SESSION['pseudo'] = $Pseudo; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    echo "Vous êtes à présent connecté !";

        }
                }
        return true;

    
    ?>