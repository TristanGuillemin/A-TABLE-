<?php
$servername = "localhost";
$username = "user";
$password = "user";
$database = "generator";

//Créer la connexion

/*$connect = new mysqli($servername, $username, $password, $database);

if ($connect -> connect_error){
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

$firstname = $_POST['prenom'];
$lastname = $_POST['nom'];
$mail = $_POST['mail'];
$pass = $_POST['password'];

if($_POST['password']==$_POST['verifpassword']){
    //echo $pass . ' ';
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    /*echo $firstname . ' ';
    echo $lastname . ' ';
    echo $mail .  ' ';
    echo $pass . ' ';*/
    
    $sql = 'INSERT INTO utilisateur(idUtilisateur,prenomUtilisateur,nomUtilisateur,mailUtilisateur,mdpUtilisateur) VALUES (DEFAULT, :firstname, :lastname, :mail, :pass)';
    $req = $connect->prepare($sql);
    $req->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $req->bindParam(':lastname', $lastname,PDO::PARAM_STR);
    $req->bindParam(':mail',$mail,PDO::PARAM_STR);
    $req->bindParam(':pass',$pass,PDO::PARAM_STR);
    $req->execute();
    //echo 'insertion réalisée';

    session_start();
    $_SESSION['id'] = $resultat['idUtilisateur'];
    header('Location: accueil.php');
    //echo $_SESSION['id'];
}
else{
    header('Location: connexion.html');
}

?>