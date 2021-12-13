<?php
	session_start();
	int $i;
	$connect = new PDO('mysql:host=localhost;dbname=generator','user', 'user');
	for($i=0;i<$nbRepas;$i++){
		$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link href="CSS/voir_menu.css" rel="stylesheet"/>
	<link rel="stylesheet" href="CSS/css/bootstrap.css">
	<title>Voir menu</title>
</head>
<body>
	<div class="voit-menu">
		<div class="container">
		  <a id="buttonAccueil" href= "accueil.php" >Accueil</a>
		  <a id="buttonProfil" href= "profil.php" >Profil</a>
		</div>

		<div class="container">
			<div class="row">
			<div id="lundi" class="col">
				Lundi
			</div>
			<div id="mardi" class="col">
				Mardi
			</div>
			<div id="mercredi" class="col">
				Mercredi
			</div>
			<div id="jeudi" class="col">
				Jeudi
			</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div id="midi"class="col">
				
			</div>
				<div id="midi"class="col">
				
			</div>
				<div id="midi"class="col">
				
			</div>
				<div id="midi"class="col">
				
			</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div id="soir"class="col">
				
			</div>
				<div id="soir"class="col">
				
			</div>
				<div id="soir"class="col">
				
			</div>
				<div id="soir"class="col">
				
			</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
			<div id="vendredi" class="col">
				Vendredi
			</div>
			<div id="samedi" class="col">
				Samedi
			</div>
			<div id="dimanche" class="col">
				Dimanche
			</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div id="midi"class="col">
				
			</div>
				<div id="midi"class="col">
				
			</div>
				<div id="midi"class="col">
				
			</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div id="soir"class="col">
				
			</div>
				<div id="soir"class="col">
				
			</div>
				<div id="soir"class="col">
				
			</div>
			</div>
		</div>
	</div>

</body>
</html>