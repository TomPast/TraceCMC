<?php
    /*
    *  Moulinette PHP qui va ressortir les informations nécéssaires uniquement et les stocker dans un fichier JSON
    */

    $mysqli= new mysqli("localhost", "root", "", "traceforum");
    
    $JSONResult = array();

    $queryUsers = "SELECT DISTINCT Utilisateur From transition";
    $resultUsers = $mysqli->query($queryUsers);
    while($r = $resultUsers -> fetch_row()){
        $nom = $r[0];
        //Requete pour savoir si l'utilisateur a répondu à un message
        $queryMessageCible = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-01' AND '2009-02-15'";
        $attributMessage = $mysqli->query($queryMessageCible);

        while($attribut = $attributMessage -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            echo $nom;
            echo $IDParent;
        



            $MessageLien = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryMessageLien = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Repondre a un message')";
            $MessageLien[0] = $mysqli->query($queryMessageLien)-> fetch_row()[0];

            echo $MessageLien[0];
            echo '<br>';
            
            //RésultatJSON
            $JSONResult[$nom]["reponse_avec_$MessageLien[0]"] = $MessageLien;
            
        }

        //Requete permettant de retrouver l'auteur du message d'origine
        //SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=1164%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Repondre a un message')


        /*$JSONResult[$nom]["MessagePeriode"] = $MessagePeriode;
        $JSONResult[$nom]["LecturePeriode"] = $LecturePeriode;
        $JSONResult[$nom]["DocumentPeriode"] = $DocumentPeriode;
        $JSONResult[$nom]["ConnexionPeriode"] = $ConnexionPeriode;
        $JSONResult[$nom]["MotivationPeriode"] = $MotivationPeriode;*/
    } 
    
    //Création d'un fichier JSON avec les résultats
    $fp = fopen('results.json', 'w');
    fwrite($fp, json_encode($JSONResult));
    fclose($fp);
    mysqli_close($mysqli);   
?>