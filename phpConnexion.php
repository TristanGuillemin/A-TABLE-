<?php
$servername = "localhost";
$username = "user";
$password = "user";
$database = "generator";

//Créer la connexion

$connect = new mysqli($servername, $username, $password, $database);

/*if ($connect -> connect_error){
    die("Erreur de connexion: ".$connect->connect_error);
}*/


try 
{
    $connect = new PDO('mysql:host=localhost;dbname=generator','user', 'user');
}
    
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$mail = $_POST['mail'];


$req = $connect->prepare("SELECT * FROM utilisateur WHERE mailUtilisateur = '$mail' ") /*or die(print_r($connect->errorInfo()))*/;
$req->execute(array('mail' => $mail));
$resultat = $req->fetch();



/*if (!$resultat)
{
    header('Location: connexion.html');
}
else
{*/
    if (password_verify($_POST['password'], $resultat['mdpUtilisateur'])) {
   //if ($_POST['password'] == $resultat['mdpUtilisateur']) {
        session_start();
        $_SESSION['id'] = $resultat['idUtilisateur'];
        //echo $_SESSION['id'];
        header('Location: accueil.php');
    }
    else {
        header('Location: connexion.html');
    }
//}