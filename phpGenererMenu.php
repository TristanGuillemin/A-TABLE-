<?php
    //Connexion BDD
    
    try 
    {
        $connect = new PDO('mysql:host=localhost;dbname=generator','user', 'user');
    }
        
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    //Nombre de repas par type
    $platVegetarien = $_POST['vegetarien'];
    $platViande = $_POST['viande'];
    $platPoisson = $_POST['poisson'];

    $compte = 0;

    //Compter le nombre de repas
    if(isset($_POST['jour1_m'])){
        $compte++;
    }
    if(isset($_POST['jour2_m'])){
        $compte++;
    }
    if(isset($_POST['jour3_m'])){
        $compte++;
    }
    if(isset($_POST['jour4_m'])){
        $compte++;
    }
    if(isset($_POST['jour5_m'])){
        $compte++;
    }
    if(isset($_POST['jour6_m'])){
        $compte++;
    }
    if(isset($_POST['jour7_m'])){
        $compte++;
    }

    if(isset($_POST['jour1_s'])){
        $compte++;
    }
    if(isset($_POST['jour2_s'])){
        $compte++;
    }
    if(isset($_POST['jour3_s'])){
        $compte++;
    }
    if(isset($_POST['jour4_s'])){
        $compte++;
    }
    if(isset($_POST['jour5_s'])){
        $compte++;
    }
    if(isset($_POST['jour6_s'])){
        $compte++;
    }
    if(isset($_POST['jour7_s'])){
        $compte++;
    }
    
    //Verification si le formulaire a été correctement rempli ou non
    if($compte == ($platVegetarien + $platViande + $platPoisson)){
        //Attribuer un 
        $minAlea = 1;
        $maxAleaPlat;
        $maxAleaDessert;
        
        //Compter le nombre max de plat
        $reponse = $connect->query("SELECT COUNT(idPlat) AS nbplat FROM plat")
        or die(print_r($connect->errorInfo()));
        
        while ($affichage = $reponse->fetch())
        {
            $maxAleaPlat = $affichage['nbplat'];
            
        }
        echo $maxAleaPlat.'<br>';

        //Compter le nombre max de dessert
        $reponse = $connect->query("SELECT COUNT(idDessert) AS nbdessert FROM dessert")
        or die(print_r($connect->errorInfo()));
                
        while ($affichage = $reponse->fetch())
        {
            $maxAleaDessert = $affichage['nbdessert'];
                    
        }
        echo $maxAleaDessert.'<br>';

        
        //Générer un repas par jour coché
        if(isset($_POST['jour1_m'])){
            $idPlat = rand($minAlea,$maxAleaPlat);
            $idDessert = rand($minAlea,$maxAleaDessert);
            echo $idPlat.'<br>';
            echo $idDessert.'<br>';
            //Vérifier que le plat corresponde aux critères de régime et aux allergies

            
            //Insertion dans la table repas
            /*$sql = 'INSERT INTO repascontent(idRepas,idPlat,idDessert) VALUES (DEFAULT, :plat, :dessert)';
            $req = $connect->prepare($sql);
            $req->bindParam(':plat', $idPlat, PDO::PARAM_STR);
            $req->bindParam(':dessert', $idDessert,PDO::PARAM_STR);
            $req->execute();*/
        }
        if(isset($_POST['jour2_m'])){
        }
        if(isset($_POST['jour3_m'])){
        }
        if(isset($_POST['jour4_m'])){
        }
        if(isset($_POST['jour5_m'])){
        }
        if(isset($_POST['jour6_m'])){
        }
        if(isset($_POST['jour7_m'])){
        }
    
        if(isset($_POST['jour1_s'])){
        }
        if(isset($_POST['jour2_s'])){
        }
        if(isset($_POST['jour3_s'])){
        }
        if(isset($_POST['jour4_s'])){
        }
        if(isset($_POST['jour5_s'])){
        }
        if(isset($_POST['jour6_s'])){
        }
        if(isset($_POST['jour7_s'])){
        }        
    }
    else{
        echo "vous n'avez pas saisi correctement les plats <br>";
        // header('Location: generer_menus.php');
        echo "<a id='retourGenerer' href= 'generer_menus.php' >Cliquez ici pour revenir à la saisie des plats</a>";
    }


    



    var_dump( $_POST );
    echo "<br>";
    echo $compte;


?>