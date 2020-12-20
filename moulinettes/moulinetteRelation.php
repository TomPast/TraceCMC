<?php
    /*
    *  Moulinette PHP qui va ressortir les informations nécéssaires pour les relations uniquement et les stocker dans un fichier JSON : resultRelation.json
    */
    include('connect.php');
    $mysqli= new mysqli($servername, $username, $password, $database);

    $JSONResult = array();

    $queryUsers = "SELECT DISTINCT Utilisateur From transition";
    $resultUsers = $mysqli->query($queryUsers);

    //Pour chaque utilisateur
    while($r = $resultUsers -> fetch_row()){
        $nom = $r[0];

        $ReponsePeriode = array();
        $listUsers = array();
        //Requete pour savoir si l'utilisateur a répondu/cité à un message
        $queryMessageCiblePeriode1 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-01' AND '2009-02-15'";
        $attributMessagePeriode1 = $mysqli->query($queryMessageCiblePeriode1);

        while($attribut = $attributMessagePeriode1 -> fetch_row()){
            //On récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode1 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode1 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message'  OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode1[0] = $mysqli->query($queryUtilisateurCiblePeriode1)-> fetch_row()[0];

            //$nom a répondu à $utilisateurCiblePeriode1 sur la période 1
            //array_push($listUsers, $utilisateurCiblePeriode1[0]);
            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode1[0]]["reponse"]["0"])){
                $JSONResult[$nom][$utilisateurCiblePeriode1[0]]["reponse"]["0"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode1[0]]["reponse"]["0"] = 1;
            }
        }

        $queryMessageCiblePeriode2 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-15' AND '2009-02-29'";
        $attributMessagePeriode2 = $mysqli->query($queryMessageCiblePeriode2);

        while($attribut = $attributMessagePeriode2 -> fetch_row()){
            //On récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode2 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode2 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message'  OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode2[0] = $mysqli->query($queryUtilisateurCiblePeriode2)-> fetch_row()[0];

            //$nom a répondu à $utilisateurCiblePeriode1 sur la période 1
            //array_push($listUsers, $utilisateurCiblePeriode1[0]);
            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode2[0]]["reponse"]["1"])){
                $JSONResult[$nom][$utilisateurCiblePeriode2[0]]["reponse"]["1"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode2[0]]["reponse"]["1"] = 1;
            }
        }

        $queryMessageCiblePeriode3 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-01' AND '2009-03-15'";
        $attributMessagePeriode3 = $mysqli->query($queryMessageCiblePeriode3);

        while($attribut = $attributMessagePeriode3 -> fetch_row()){
            //On récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode3 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode3 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message'  OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode3[0] = $mysqli->query($queryUtilisateurCiblePeriode3)-> fetch_row()[0];

            //$nom a répondu à $utilisateurCiblePeriode1 sur la période 1
            //array_push($listUsers, $utilisateurCiblePeriode1[0]);
            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode3[0]]["reponse"]["2"])){
                $JSONResult[$nom][$utilisateurCiblePeriode3[0]]["reponse"]["2"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode3[0]]["reponse"]["2"] = 1;
            }
        }

        $queryMessageCiblePeriode4 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-15' AND '2009-03-31'";
        $attributMessagePeriode4 = $mysqli->query($queryMessageCiblePeriode4);

        while($attribut = $attributMessagePeriode4 -> fetch_row()){
            //On récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode4 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode4 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message'  OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode4[0] = $mysqli->query($queryUtilisateurCiblePeriode4)-> fetch_row()[0];

            //$nom a répondu à $utilisateurCiblePeriode1 sur la période 1
            //array_push($listUsers, $utilisateurCiblePeriode1[0]);
            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode4[0]]["reponse"]["3"])){
                $JSONResult[$nom][$utilisateurCiblePeriode4[0]]["reponse"]["3"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode4[0]]["reponse"]["3"] = 1;
            }
        }

        $queryMessageCiblePeriode5 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-01' AND '2009-04-15'";
        $attributMessagePeriode5 = $mysqli->query($queryMessageCiblePeriode5);

        while($attribut = $attributMessagePeriode5 -> fetch_row()){
            //On récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode5 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode5 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message'  OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode5[0] = $mysqli->query($queryUtilisateurCiblePeriode5)-> fetch_row()[0];

            //$nom a répondu à $utilisateurCiblePeriode1 sur la période 1
            //array_push($listUsers, $utilisateurCiblePeriode1[0]);
            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode5[0]]["reponse"]["4"])){
                $JSONResult[$nom][$utilisateurCiblePeriode5[0]]["reponse"]["4"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode5[0]]["reponse"]["4"] = 1;
            }
        }

        $queryMessageCiblePeriode6 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-15' AND '2009-04-31'";
        $attributMessagePeriode6 = $mysqli->query($queryMessageCiblePeriode6);

        while($attribut = $attributMessagePeriode6 -> fetch_row()){
            //On récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode6 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode6 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message'  OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode6[0] = $mysqli->query($queryUtilisateurCiblePeriode6)-> fetch_row()[0];

            //$nom a répondu à $utilisateurCiblePeriode1 sur la période 1
            //array_push($listUsers, $utilisateurCiblePeriode1[0]);
            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode6[0]]["reponse"]["5"])){
                $JSONResult[$nom][$utilisateurCiblePeriode6[0]]["reponse"]["5"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode6[0]]["reponse"]["5"] = 1;
            }
        }

        $queryMessageCiblePeriode7 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-01' AND '2009-05-15'";
        $attributMessagePeriode7 = $mysqli->query($queryMessageCiblePeriode6);

        while($attribut = $attributMessagePeriode7 -> fetch_row()){
            //On récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode7 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode7 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message'  OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode7[0] = $mysqli->query($queryUtilisateurCiblePeriode7)-> fetch_row()[0];

            //$nom a répondu à $utilisateurCiblePeriode1 sur la période 1
            //array_push($listUsers, $utilisateurCiblePeriode1[0]);
            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode7[0]]["reponse"]["6"])){
                $JSONResult[$nom][$utilisateurCiblePeriode7[0]]["reponse"]["6"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode7[0]]["reponse"]["6"] = 1;
            }
        }

        $queryMessageCiblePeriode1 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre` ='Afficher le contenu d\'un message' AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-01' AND '2009-02-15'";
        $attributMessagePeriode1 = $mysqli->query($queryMessageCiblePeriode1);

        while($attribut = $attributMessagePeriode1 -> fetch_row()){
            //on récupere l'IDMsg du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode1 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode1 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode1[0] = $mysqli->query($queryUtilisateurCiblePeriode1)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode1[0]);

            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode1[0]]["lu"]["0"])){
                $JSONResult[$nom][$utilisateurCiblePeriode1[0]]["lu"]["0"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode1[0]]["lu"]["0"] = 1;
            }
        }

        $queryMessageCiblePeriode2 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre` ='Afficher le contenu d\'un message' AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-15' AND '2009-02-29'";
        $attributMessagePeriode2 = $mysqli->query($queryMessageCiblePeriode2);

        while($attribut = $attributMessagePeriode2 -> fetch_row()){
            //on récupere l'IDMsg du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode2 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode2 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode2[0] = $mysqli->query($queryUtilisateurCiblePeriode2)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode2[0]);

            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode2[0]]["lu"]["1"])){
                $JSONResult[$nom][$utilisateurCiblePeriode2[0]]["lu"]["1"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode2[0]]["lu"]["1"] = 1;
            }
        }

        $queryMessageCiblePeriode3 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre` ='Afficher le contenu d\'un message' AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-01' AND '2009-03-15'";
        $attributMessagePeriode3 = $mysqli->query($queryMessageCiblePeriode3);

        while($attribut = $attributMessagePeriode2 -> fetch_row()){
            //on récupere l'IDMsg du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode3 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode3 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode3[0] = $mysqli->query($queryUtilisateurCiblePeriode3)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode3[0]);

            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode3[0]]["lu"]["2"])){
                $JSONResult[$nom][$utilisateurCiblePeriode3[0]]["lu"]["2"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode3[0]]["lu"]["2"] = 1;
            }
        }

        $queryMessageCiblePeriode4 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre` ='Afficher le contenu d\'un message' AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-15' AND '2009-03-31'";
        $attributMessagePeriode4 = $mysqli->query($queryMessageCiblePeriode4);

        while($attribut = $attributMessagePeriode4 -> fetch_row()){
            //on récupere l'IDMsg du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode4 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode4 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode4[0] = $mysqli->query($queryUtilisateurCiblePeriode4)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode4[0]);

            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode4[0]]["lu"]["3"])){
                $JSONResult[$nom][$utilisateurCiblePeriode4[0]]["lu"]["3"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode4[0]]["lu"]["3"] = 1;
            }
        }

        $queryMessageCiblePeriode5 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre` ='Afficher le contenu d\'un message' AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-01' AND '2009-04-15'";
        $attributMessagePeriode5 = $mysqli->query($queryMessageCiblePeriode5);

        while($attribut = $attributMessagePeriode5 -> fetch_row()){
            //on récupere l'IDMsg du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode5 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode5 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode5[0] = $mysqli->query($queryUtilisateurCiblePeriode5)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode5[0]);

            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode5[0]]["lu"]["4"])){
                $JSONResult[$nom][$utilisateurCiblePeriode5[0]]["lu"]["4"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode5[0]]["lu"]["4"] = 1;
            }
        }

        $queryMessageCiblePeriode6 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre` ='Afficher le contenu d\'un message' AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-15' AND '2009-04-31'";
        $attributMessagePeriode6 = $mysqli->query($queryMessageCiblePeriode6);

        while($attribut = $attributMessagePeriode6 -> fetch_row()){
            //on récupere l'IDMsg du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode6 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode6 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode6[0] = $mysqli->query($queryUtilisateurCiblePeriode6)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode6[0]);

            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode6[0]]["lu"]["5"])){
                $JSONResult[$nom][$utilisateurCiblePeriode6[0]]["lu"]["5"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode6[0]]["lu"]["5"] = 1;
            }
        }

        $queryMessageCiblePeriode7 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre` ='Afficher le contenu d\'un message' AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-01' AND '2009-05-15'";
        $attributMessagePeriode7 = $mysqli->query($queryMessageCiblePeriode6);

        while($attribut = $attributMessagePeriode7 -> fetch_row()){
            //on récupere l'IDMsg du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);

            $utilisateurCiblePeriode7 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode7 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode7[0] = $mysqli->query($queryUtilisateurCiblePeriode7)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode7[0]);

            if(isset( $JSONResult[$nom][$utilisateurCiblePeriode7[0]]["lu"]["6"])){
                $JSONResult[$nom][$utilisateurCiblePeriode7[0]]["lu"]["6"]++;
            }else{
                $JSONResult[$nom][$utilisateurCiblePeriode7[0]]["lu"]["6"] = 1;
            }
        }

        foreach ($JSONResult as $key1 => $value1) {
            foreach($value1 as $key2 => $value2){
                for ($i = 0; $i <= 6; $i++) {
                    $reponse = 0;
                    $lecture = 0;
                    if(isset( $JSONResult[$key1][$key2]['reponse'][$i])){$reponse = $JSONResult[$key1][$key2]['reponse'][$i];}
                    if(isset( $JSONResult[$key1][$key2]['lu'][$i])){$lecture = $JSONResult[$key1][$key2]['lu'][$i];}
                    $JSONResult[$key1][$key2]['relation'][$i] = ($reponse * 8 + $lecture);
                }
            }
        }

    }

    //Création d'un fichier JSON avec les résultats
    $fp = fopen('resultJSON/resultRelation.json', 'w');
    fwrite($fp, json_encode($JSONResult));
    fclose($fp);
    mysqli_close($mysqli);

    echo 'La moulinette a bien été exécutée. Vous retrouverez le résultat dans le fichier resultJSON/resultRelation.json';

?>
