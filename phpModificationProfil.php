<?php

$servername = "localhost";
$username = "user";
$password = "user";
$database = "generator";

try 
{
    $connect = new PDO('mysql:host=localhost;dbname=generator','user', 'user');
}
    
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
if(isset($_POST['nomUtilisateur']))      $nom=$_POST['nomUtilisateur'];
else      $nom="";

if(isset($_POST['prenomUtilisateur']))      $prenom=$_POST['prenomUtilisateur'];
else      $prenom="";

if(isset($_POST['mailUtilisateur']))      $email=$_POST['mailUtilisateur'];
else      $email="";

if(isset($_POST['mdpUtilisateur']))      $mdp=$_POST['mdpUtilisateur'];
else      $mdp="";



    $req = $bdd->prepare('UPDATE Utilisateur SET nomUtilisateur = :nouveau_nomUtilisateur, prenomUtilisateur = :nouveau_prenomUtilisateur, mailUtilisateur = :nouveau_mailUtilisateur, mdpUtilisateur = :nouveau_mdpUtilisateur, idRegime = :nouveau_regime WHERE idUtilisateur = :idUtilisateur ');
		
	$req->execute(array( 
			'nouveau_nomUtilisateur' => $_POST['nomUtilisateur'],
			'nouveau_prenomUtilisateur' => $_POST['prenomUtilisateur'],
			'nouveau_mailUtilisateur' => $_POST['mailUtilisateur'],
			'nouveau_mdpUtilisateur' => $_POST['mdpUtilisateur'],
			'nouveau_regime' => $_POST['idRegime']
			));			
	    
    $req->closeCursor();
    mysql_close();
?>