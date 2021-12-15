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

    $reponse = $connect->query("SELECT idMenu FROM menu WHERE idUtilisateur = $id")
    or die(print_r($connect->errorInfo()));
            
    while ($affichage = $reponse->fetch())
    {
        $idMenu = $affichage['idMenu'];
        
        $reponse2 = $connect->query("SELECT idRepas,Semaine,Jour,typeRepas FROM menucontent WHERE idMenu = $idMenu")
        or die(print_r($connect->errorInfo()));
                
        while ($affichage2 = $reponse2->fetch()){
            $idRepas = $affichage2['idRepas'];
            $semaine = $affichage2['Semaine'];
            $jour = $affichage2['Jour'];
            $repas = $affichage2['typeRepas'];

            $reponse3 = $connect->query("SELECT idPlat, idDessert FROM repascontent WHERE idRepas = $idRepas")
            or die(print_r($connect->errorInfo()));
                    
            while ($affichage3 = $reponse3->fetch()){
                $idPlat = $affichage3['idPlat'];
                $idDessert = $affichage3['idDessert'];

                $reponse4 = $connect->query("SELECT nomDessert FROM dessert WHERE idDessert = $idDessert")
                or die(print_r($connect->errorInfo()));
                        
                while ($affichage4 = $reponse4->fetch()){
                    $nomDessert = $affichage4['nomDessert'];
                }

                $reponse5 = $connect->query("SELECT nomPlat FROM plat WHERE idPlat = $idPlat")
                or die(print_r($connect->errorInfo()));
                        
                while ($affichage5 = $reponse5->fetch()){
                    $nomPlat = $affichage5['nomPlat'];
                }

                echo "menu n° ".$idMenu."<br>";
                echo "semaine n° ".$semaine."<br>";
                echo "jour : ".$jour." ".$repas."<br>";
                echo "dessert : ".$nomDessert."<br>";
                echo "plat : ".$nomPlat."<br>";

            } 


        }


                
    }
?>