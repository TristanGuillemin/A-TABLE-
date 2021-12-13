<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Accueil</title>
	<link href="accueil.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/bootstrap.css" >
</head>
<body>
	<div class="page_accueil">
		<div class="accueil">
			<div class="container">
				
			<a id="buttonProfil" href= "profil.php" >Profil</a>
          	<a id="buttonDeconnexion" href= "phpDeconnexion.php" >Déconnexion</a>
				
				<div class="row">
					<div class="col">
						<div class="generer">
							<h1>Générer un menu</h1>
								<ul>
									<li>Choisir le nombre de repas</li><br>
									<li>Choix du type d'aliment</li><br>
									<li>Redondance des plats</li><br>
									<li>Redodnace des aliments</li><br>
									<br>
									<a id="buttonGenerer" href="generer_menus.php">Générer</a>
								</ul>
						</div>
					</div>
					<div class="col">
						<div class="voirMenus">
							<h1>Voir mes menus</h1>
								<ul>
									<li>Modifier les plats</li><br>
									<li>Ajouter ou supprimer des plats</li><br>
									<li>Relancer un plat</li><br>
									<li>Choisir un nouveau plat</li><br>
									<br>
									<a id="buttonVoirmenu" href="voir_menu.php">Voir menus</a>
								</ul>
						</div>
					</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>