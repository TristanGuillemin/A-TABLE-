<?php
    session_start();
    
    //Connexion BDD
    
    try 
    {
        $connect = new PDO('mysql:host=localhost;dbname=generator','user', 'user');
    }
        
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    //Affichage Nom + Prenom + Mail -> dans profil.php
    /*$reponse = $connect->query("SELECT prenomUtilisateur, nomUtilisateur, mailUtilisateur FROM utilisateur WHERE idUtilisateur = $_SESSION['id']")
    or die(print_r($connect->errorInfo()));
            
    while ($affichage = $reponse->fetch())
    {
        $nomUser = $affichage['nomUtilisateur'];
        $prenomUser = $affichage['prenomUtilisateur'];
        $mailUser = $affichage['mailUtilisateur'];

        echo $nomUser."<br>";
        echo $prenomUser."<br>";
        echo $mailUser."<br>";
                
    }*/

    //Modification Nom + Prenom + Mail

    $newPrenomUser = $_POST['prenomUtilisateur'];
    $newNomUser = $_POST['nomUtilisateur'];
    $newMailUser = $_POST['mailUtilisateur'];
    $id = $_SESSION['id'];

    /*echo $newPrenomUser."<br>";
    echo $newNomUser."<br>";
    echo $newMailUser."<br>";
    echo $id."<br>";*/

    $sql = "UPDATE utilisateur SET prenomUtilisateur = :prenomUtilisateur, nomUtilisateur = :nomUtilisateur, mailUtilisateur = :mailUtilisateur WHERE idUtilisateur = :idSession";
    $req = $connect->prepare($sql);
    $req->bindParam(':prenomUtilisateur',$newPrenomUser, PDO::PARAM_STR);
    $req->bindParam(':nomUtilisateur', $newNomUser,PDO::PARAM_STR);
    $req->bindParam(':mailUtilisateur',$newMailUser, PDO::PARAM_STR);
    $req->bindParam(':idSession',$id, PDO::PARAM_STR);
    $req->execute();

    //Modification du mot de passe
    $pass = $_POST['password'];

    if($_POST['password']==$_POST['verifpassword'] && $_POST['password']!=""){
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "UPDATE utilisateur SET mdpUtilisateur = :pass WHERE idUtilisateur = :idSession";
        $req = $connect->prepare($sql);
        $req->bindParam(':pass',$pass,PDO::PARAM_STR);
        $req->bindParam(':idSession',$id, PDO::PARAM_STR);
        $req->execute();
    }

    //Affichage allergies -> présente dans profil.php
    //Partiellement fonctionelle
    /*
    $reponse = $connect->query("SELECT idAllergene FROM utilisateurallergie WHERE idUtilisateur = $_SESSION['id']")
    or die(print_r($connect->errorInfo()));
            
    while ($affichage = $reponse->fetch())
    {
        $nomUser = $affichage['nomUtilisateur'];
        $prenomUser = $affichage['prenomUtilisateur'];
        $mailUser = $affichage['mailUtilisateur'];
                
    }
    */

    //Modification allergies
    //Non fonctionelle
    /*$allergie[] = $_POST['allergie'];
    foreach ($allergie as $value){
        echo $allergie[$value];

        
        $reponse = $connect->query("SELECT nomAllergene FROM allergene WHERE nomAllergene = $value")
        or die(print_r($connect->errorInfo()));
                
        while ($affichage = $reponse->fetch())
        {
            $allergene = $affichage['nomAllergene'];
                    
        }

        $sql = 'INSERT INTO utilisateurallergie(idUtilisateur,idAllergene) VALUES (:user, :allergene)';
        $req = $connect->prepare($sql);
        $req->bindParam(':user', $id, PDO::PARAM_STR);
        $req->bindParam(':allergene', $allergene,PDO::PARAM_STR);
        $req->execute();
    }*/

    
    
    //Affichage régime
    //Non fonctionelle
    /*
    $reponse = $connect->query("SELECT idRegime FROM utilisateur WHERE idUtilisateur = $_SESSION['id']")
    or die(print_r($connect->errorInfo()));
            
    while ($affichage = $reponse->fetch())
    {
        $regimeUser = $affichage['idRegime'];
                
    }*/

    //Modifcation régime
    //Non fonctionelle
    /*
    $sql = "UPDATE utilisateur SET idRegime = :idRegime WHERE idUtilisateur = $_SESSION['id']";
    $req = $connect->prepare($sql);
    $req->bindParam(':idRegime', $_POST['regime'], PDO::PARAM_STR);
    $req->execute();
    */

    //var_dump($_POST['allergie']);
    
?>