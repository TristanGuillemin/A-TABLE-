<?php
	session_start();

	try 
    {
        $connect = new PDO('mysql:host=localhost;dbname=generator','user', 'user');
    }
        
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

	$id = $_SESSION['id'];
    //Affichage Nom + Prenom + Mail
    $reponse = $connect->query("SELECT prenomUtilisateur, nomUtilisateur, mailUtilisateur FROM utilisateur WHERE idUtilisateur = $id")
    or die(print_r($connect->errorInfo()));
            
    while ($affichage = $reponse->fetch())
    {
        $nomUser = $affichage['nomUtilisateur'];
        $prenomUser = $affichage['prenomUtilisateur'];
        $mailUser = $affichage['mailUtilisateur'];

        /*echo $nomUser."<br>";
        echo $prenomUser."<br>";
        echo $mailUser."<br>";*/
                
    }

	//Affichage allergie
	$allergie = "";
	$reponse = $connect->query("SELECT idAllergene FROM utilisateurallergie WHERE idUtilisateur = $id")
    or die(print_r($connect->errorInfo()));
            
    while ($affichage = $reponse->fetch())
    {
        $idAllergie = $affichage['idAllergene'];
		$reponseBis = $connect->query("SELECT nomAllergene FROM allergene WHERE idAllergene = $idAllergie")
		or die(print_r($connect->errorInfo()));

		while ($affichageBis = $reponseBis->fetch()){
			$allergie = $affichageBis['nomAllergene'];
		}
                
    }


	
?>
<!DOCTYPE html><html>
<head>
	<link href="CSS/profil.css" rel="stylesheet" />
	<title>Profil</title>
	<link rel="stylesheet" href="CSS/css/bootstrap.css">
	<meta charset="utf-8" />
</head>
<body>
	<div class="page_profil">
		<div class="container">
			
				<a id="buttonAccueil" href= "accueil.php" >Acceuil</a>
  		 		<a id="buttonDeconnexion" href="phpDeconnexion.php">Déconnexion</a>
     		<div class="col"></div>
     		<div class="row">
     			<div class="col">
     				<div class="infoProfil">
						 <!--Debut Formulaire-->
					 	<form method="post" action="phpModificationProfil.php">
     					Prénom: <input type="text" maxlength="40" name="prenomUtilisateur" value="<?php echo $prenomUser ?>">
						<br>
     					<br>
     		 			Nom: <input type="text" maxlength="40" name="nomUtilisateur" value="<?php echo $nomUser ?>">
						<br>
     		 			<br>
						Mail: <input type="text" name="mailUtilisateur" maxlength="40" value="<?php echo $mailUser ?>">
						<br>
						<br> 
						Mot de passe: <input type ="password" name="password" placeholder="Mot de passe"/>
						<br>
						<br>
						Confirmation du mot de passe: <input type ="password" name="verifpassword" placeholder="Comfirmer le mot de passe"/>
						<br>
						<br>
				 		<!--alergies-->
						Allergies: 
						<div class="infoAllergies">
						<table cellpadding="5" width="75%">
							<tr>
     		 					<td><input type="checkbox" name="allergie[]" value="oeuf" <?php if($allergie == "oeuf"){echo "checked";} ; ?> >&emsp;Oeuf</td>

								<td><input type="checkbox" name="allergie[]" value="lait_vache">&emsp;Lait de vache </td>
							</tr>
							<tr>
								<td><input type="checkbox" name="allergie[]" value="arachide">&emsp;Arachide </td>

								<td><input type="checkbox" name="allergie[]" value="soja">&emsp;Soja</td>
							</tr>
							<tr>
								<td><input type="checkbox" name="allergie[]" value="fruit_coque">&emsp;Fruits a coque</td>

								<td><input type="checkbox" name="allergie[]" value="ble">&emsp;Ble</td> 
							</tr>
							<tr>
								<td><input type="checkbox" name="allergie[]" value="fruit_mer">&emsp;Fruits de mer</td> 

								<td><input type="checkbox" name="allergie[]" value="fruit_legume">&emsp;Fruits et legumes </td>
							</tr>
						</table>
						</div>
						<br>
						Régime spécifique : 
						<select name="regime" id="regime-select">
							<option value="">Choisissez votre régime</option>
							<option value="vegetarien">Végétarien</option>
							<option value="vegan">Végan</option>
						</select><br>
						<br>
						<input type="submit" value="Envoyer" name="envoyer">
						</form>
						<!--Fin Formulaire-->
					</div>
     			</div>
     		</div>
		</div>
	</div>
</body>
