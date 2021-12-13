<?php
	session_start();
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
					 	<form method="post" action="phpModificationProfil.php">
     					Prénom: <input type="text" maxlength="40" name="prenomUtilisateur">
						<br>
     					<br>
     		 			Nom: <input type="text" maxlength="40" name="nomUtilisateur">
						<br>
     		 			<br>
						Mail: <input type="text" name="mailUtilisateur" maxlength="40">
						<br>
						<br> 
						Mot de passe: <input type="text" name="mdpUtilisateur" maxlength="40">
						<br>
						<br>
				 		<!--alergies-->
						Allergies: 
						<div class="infoAllergies">
						<table cellpadding="5" width="75%">
							<tr>
     		 					<td><input type="checkbox" name="allergie" value="oeuf">&emsp;Oeuf</td>

								<td><input type="checkbox" name="allergie" value="lait_vache">&emsp;Lait de vache </td>
							</tr>
							<tr>
								<td><input type="checkbox" name="allergie" value="arachide">&emsp;Arachide </td>

								<td><input type="checkbox" name="allergie" value="soja">&emsp;Soja</td>
							</tr>
							<tr>
								<td><input type="checkbox" name="allergie" value="fruit_coque">&emsp;Fruits à coque</td>

								<td><input type="checkbox" name="allergie" value="blé">&emsp;Blé</td> 
							</tr>
							<tr>
								<td><input type="checkbox" name="allergie" value="fruit_mer">&emsp;Fruits de mer</td> 

								<td><input type="checkbox" name="allergie" value="fruit_légume">&emsp;Fruits et légumes </td>
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
					</div>
     			</div>
     		</div>
		</div>
	</div>
</body>
