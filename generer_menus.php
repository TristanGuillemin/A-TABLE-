<?php
	session_start();
?>
<!DOCTYPE html><html>
<head>
	<link href="CSS/generer_menus.css" rel="stylesheet" />
	<link rel="stylesheet" href="CSS/css/bootstrap.css">
	<meta charset="utf-8" />
	<title>Générer menu</title>
</head>
<body>
	<div class="tout">
	<div class="generer_menu">
		<div class="container">
		  	<a id="buttonAccueil" href="accueil.php">Accueil</a>
  		 	<a id="buttonProfil" href="profil.php">Profil</a>
  		 	
  		 	<div class="col">
     		 <div class="info_generation">

     		 	<h1> Nombre de repas </h1>
          		Avec viande:&nbsp &nbsp<input type="number" name="viande" min="0" max="14" placeholder="Nombre de repas avec viande"><br>
 				<br>
     		 	Avec poisson: <input type="number" name="poisson"min="0" max="14" placeholder="Nombre de repas avec poisson"><br>
     		 	<br>
     		 	Végétarien:&nbsp &nbsp &nbsp<input type="number" name="vegetarien"min="0" max="14" placeholder="Nombre de repas végétarien"><br>
     		 	<br>
     		
     		 	Repas:<br>
     		 	<br>
				 <!--check box jours-->
     		 	<table cellpadding="10" width="75%">
     		 		<tr>
     		 			<th></th>
     		 			<th>L</th>
     		 			<th>M</th>
     		 			<th>M</th>
     		 			<th>J</th>
     		 			<th>V</th>
     		 			<th>S</th>
     		 			<th>D</th>
     		 		</tr>
     		 		<tr>
     		 			<td>Midi:</td>
     		 			<td><input class="increase" type="checkbox" name="jour1_m" value="Lmatin"></td>
     		 			<td><input class="increase" type="checkbox" name="jour2_m" value="M1matin"></td>
     		 			<td><input class="increase" type="checkbox" name="jour3_m" value="M2matin"></td>
     		 			<td><input class="increase" type="checkbox" name="jour4_m" value="Jmatin"></td>
     		 			<td><input class="increase" type="checkbox" name="jour5_m" value="Vmatin"></td>
     		 			<td><input class="increase" type="checkbox" name="jour6_m" value="Smatin"></td>
     		 			<td><input class="increase" type="checkbox" name="jours7_m" value="Dmatin"></td>
     		 		</tr>
     		 		<tr>
     		 			<td>Soir:</td>
     		 			<td><input class="increase" type="checkbox" name="jour1_s" value="Lsoir"></td>
     		 			<td><input class="increase" type="checkbox" name="jour2_s" value="M1soir"></td>
     		 			<td><input class="increase" type="checkbox" name="jour3_s" value="M2soir"></td>
     		 			<td><input class="increase" type="checkbox" name="jour4_s" value="Jsoir"></td>
     		 			<td><input class="increase" type="checkbox" name="jour5_s" value="Vsoir"></td>
     		 			<td><input class="increase" type="checkbox" name="jour6_s" value="Ssoir"></td>
     		 			<td><input class="increase" type="checkbox" name="jour7_s" value="Dsoir"></td>
     		 		</tr>
     		 	</table>
     		 	<br>
			 	<!--partie Générations-->
     		 	<a id="buttonGénérer" href= "voir_menu.php" >Générer</a>
     		 </div>
     	</div>	 
    </div>
    </div>
	</div>
</body>
</html>
