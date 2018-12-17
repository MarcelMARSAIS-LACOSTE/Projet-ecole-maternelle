<?php
    
        if(empty($_POST['username']))
        {
            header('Location: index.php?erreur=2');
            return false;
        }
        if(empty($_POST['password']))
        {
            header('Location: index.php?erreur=2');
            return false;
        }
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $conn = mysqli_connect("localhost", "u_php_Ecole", "SJzEeqLb2HHeNYVV", "php_Ecole");
        $req = "SELECT * FROM compte WHERE identifiant_compte = '".$username."' AND mot_de_passe = '".$password."'";
if (!$conn)
{
    echo "erreur de connection à la base de données";
    die;
}
                $result = mysqli_query($conn,$req); //si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if($row_cnt = mysqli_num_rows($result) == 0) {
                    header('Location: index.php?erreur=1');
                } else {
                // on ouvre la session avec $_SESSION:
                    session_start();
                    $_SESSION['identifiant_compte'] = $username;
                    //$_SESSION['pseudo'] = $Pseudo; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    header('Location: affichage.php');
        
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