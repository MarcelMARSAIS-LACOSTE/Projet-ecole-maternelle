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

        $conn = mysqli_connect("localhost", "php_ecole", "SJzEeqLb2HHeNYVV", "php_ecole");
        $req = "SELECT * FROM compte WHERE identifiant_compte = '".$username."' AND mot_de_passe = '".$password."'";

/*
if (!$conn)
{
    echo "erreur de connection à la base de données";
    die;
}*/
                $Requete = mysqli_query($conn,$req);//si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
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
        return true;
        ?>


<!--
<?php 
if(isset($_POST['Connexion'])){ 
    $dbHost = "localhost";        //Location Of Database usually its localhost 
    $dbUser = "php_ecole";            //Database User Name 
    $dbPass = "SJzEeqLb2HHeNYVV";            //Database Password 
    $dbDatabase = "php_ecole";    //Database Name 
     
    $db = mysql_connect($dbHost,$dbUser,$dbPass);

    if (!$db)
{
    echo "erreur de connection à la base de données";
    die;
}
     
    //Lets search the databse for the user name and password 
    //Choose some sort of password encryption, I choose sha256 
    //Password function (Not In all versions of MySQL). 
    $usr = mysql_real_escape_string($_POST['username']); 
    $pas = hash('sha256', mysql_real_escape_string($_POST['password'])); 
    $sql = mysql_query("SELECT * FROM users_table  
        WHERE username='$usr' AND 
        password='$pas' 
        LIMIT 1"); 
    if(mysql_num_rows($sql) == 1){ 
        $row = mysql_fetch_array($sql); 
        session_start(); 
        $_SESSION['username'] = $row['username']; 
        $_SESSION['fname'] = $row['first_name']; 
        $_SESSION['lname'] = $row['last_name']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: users_page.php"); // Modify to go to the page you would like 
        exit; 
    }else{ 
        header("Location: index.php"); 
        exit; 
    } 
}else{    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: index.php");     
    exit; 
} 
?> 

-->