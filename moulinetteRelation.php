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
    
        $ReponsePeriode = array();
        $listUsers = array();
        //Periode 1
        //Requete pour savoir si l'utilisateur a répondu à un message
        $queryMessageCiblePeriode1 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-01' AND '2009-02-15'";
        $attributMessagePeriode1 = $mysqli->query($queryMessageCiblePeriode1);

        while($attribut = $attributMessagePeriode1 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
           
            $utilisateurCiblePeriode1 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode1 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message'  OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode1[0] = $mysqli->query($queryUtilisateurCiblePeriode1)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode1[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode1[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["ReponsePeriode1"][$utilisateurCiblePeriode1[0]] = $i;
            
            }
        }
        
        //Periode 2
        $queryMessageCiblePeriode2 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-15' AND '2009-02-29'";
        $attributMessagePeriode2 = $mysqli->query($queryMessageCiblePeriode2);

        while($attribut = $attributMessagePeriode2 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode2 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode2 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode2[0] = $mysqli->query($queryUtilisateurCiblePeriode2)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode2[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode2[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["ReponsePeriode2"][$utilisateurCiblePeriode2[0]] = $i;
            
            }
        }   

        //Periode 3
        $queryMessageCiblePeriode3 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-01' AND '2009-03-15'";
        $attributMessagePeriode3 = $mysqli->query($queryMessageCiblePeriode3);

        while($attribut = $attributMessagePeriode3 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode3 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode3 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode3[0] = $mysqli->query($queryUtilisateurCiblePeriode3)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode3[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode3[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["ReponsePeriode3"][$utilisateurCiblePeriode3[0]] = $i;
            
            }
        }   

        //Periode 4
        $queryMessageCiblePeriode4 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-15' AND '2009-03-31'";
        $attributMessagePeriode4 = $mysqli->query($queryMessageCiblePeriode4);

        while($attribut = $attributMessagePeriode4 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode4 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode4 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode4[0] = $mysqli->query($queryUtilisateurCiblePeriode4)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode4[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode4[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["ReponsePeriode4"][$utilisateurCiblePeriode4[0]] = $i;
            
            }
        }   

        //Periode 5
        $queryMessageCiblePeriode5 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-01' AND '2009-04-15'";
        $attributMessagePeriode5 = $mysqli->query($queryMessageCiblePeriode5);

        while($attribut = $attributMessagePeriode5 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode5 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode5 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode5[0] = $mysqli->query($queryUtilisateurCiblePeriode5)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode5[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode5[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["ReponsePeriode5"][$utilisateurCiblePeriode5[0]] = $i;
            
            }
        }   

        //Periode 6
        $queryMessageCiblePeriode6 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-15' AND '2009-04-31'";
        $attributMessagePeriode6 = $mysqli->query($queryMessageCiblePeriode6);

        while($attribut = $attributMessagePeriode6 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode6 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode6 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode6[0] = $mysqli->query($queryUtilisateurCiblePeriode6)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode6[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode6[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["ReponsePeriode6"][$utilisateurCiblePeriode6[0]] = $i;
            
            }
        }  
        
        //Periode 7
        $queryMessageCiblePeriode7 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-01' AND '2009-05-15'";
        $attributMessagePeriode7 = $mysqli->query($queryMessageCiblePeriode7);

        while($attribut = $attributMessagePeriode7 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode7 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode7 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode7[0] = $mysqli->query($queryUtilisateurCiblePeriode7)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode7[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode7[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["ReponsePeriode7"][$utilisateurCiblePeriode7[0]] = $i;  
            }
        }  

        //Periode 8
        $queryMessageCiblePeriode8 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDParent%'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-15' AND '2009-05-31'";
        $attributMessagePeriode8 = $mysqli->query($queryMessageCiblePeriode8);

        while($attribut = $attributMessagePeriode8 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode8 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode8 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode8[0] = $mysqli->query($queryUtilisateurCiblePeriode8)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode8[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode8[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["ReponsePeriode8"][$utilisateurCiblePeriode8[0]] = $i;
            
            }
        }  

        //Periode 1
        //Requete pour savoir si l'utilisateur a lu à un message
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
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode1[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["LuPeriode1"][$utilisateurCiblePeriode1[0]] = $i;
            
            }
        }
        
        //Periode 2
        $queryMessageCiblePeriode2 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre`='Afficher le contenu d\'un message'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-15' AND '2009-02-29'";
        $attributMessagePeriode2 = $mysqli->query($queryMessageCiblePeriode2);

        while($attribut = $attributMessagePeriode2 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode2 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode2 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode2[0] = $mysqli->query($queryUtilisateurCiblePeriode2)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode2[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode2[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["LuPeriode2"][$utilisateurCiblePeriode2[0]] = $i;
            
            }
        }   

        //Periode 3
        $queryMessageCiblePeriode3 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre`='Afficher le contenu d\'un message'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-01' AND '2009-03-15'";
        $attributMessagePeriode3 = $mysqli->query($queryMessageCiblePeriode3);

        while($attribut = $attributMessagePeriode3 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode3 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode3 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode3[0] = $mysqli->query($queryUtilisateurCiblePeriode3)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode3[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode3[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["LuPeriode3"][$utilisateurCiblePeriode3[0]] = $i;
            
            }
        }   

        //Periode 4
        $queryMessageCiblePeriode4 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre`='Afficher le contenu d\'un message'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-15' AND '2009-03-31'";
        $attributMessagePeriode4 = $mysqli->query($queryMessageCiblePeriode4);

        while($attribut = $attributMessagePeriode4 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode4 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode4 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode4[0] = $mysqli->query($queryUtilisateurCiblePeriode4)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode4[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode4[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["LuPeriode4"][$utilisateurCiblePeriode4[0]] = $i;
            
            }
        }   

        //Periode 5
        $queryMessageCiblePeriode5 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre`='Afficher le contenu d\'un message'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-01' AND '2009-04-15'";
        $attributMessagePeriode5 = $mysqli->query($queryMessageCiblePeriode5);

        while($attribut = $attributMessagePeriode5 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode5 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode5 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode5[0] = $mysqli->query($queryUtilisateurCiblePeriode5)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode5[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode5[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["LuPeriode5"][$utilisateurCiblePeriode5[0]] = $i;
            
            }
        }   

        //Periode 6
        $queryMessageCiblePeriode6 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre`='Afficher le contenu d\'un message'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-15' AND '2009-04-31'";
        $attributMessagePeriode6 = $mysqli->query($queryMessageCiblePeriode6);

        while($attribut = $attributMessagePeriode6 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode6 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode6 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode6[0] = $mysqli->query($queryUtilisateurCiblePeriode6)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode6[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode6[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["LuPeriode6"][$utilisateurCiblePeriode6[0]] = $i;
            
            }
        }  
        
        //Periode 7
        $queryMessageCiblePeriode7 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre`='Afficher le contenu d\'un message'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-01' AND '2009-05-15'";
        $attributMessagePeriode7 = $mysqli->query($queryMessageCiblePeriode7);

        while($attribut = $attributMessagePeriode7 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode7 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode7 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode7[0] = $mysqli->query($queryUtilisateurCiblePeriode7)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode7[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode7[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["LuPeriode7"][$utilisateurCiblePeriode7[0]] = $i;  
            }
        }  

        //Periode 8
        $queryMessageCiblePeriode8 = "SELECT `Attribut` FROM `transition` WHERE `Attribut` LIKE '%IDMsg%' AND `Titre`='Afficher le contenu d\'un message'  AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-15' AND '2009-05-31'";
        $attributMessagePeriode8 = $mysqli->query($queryMessageCiblePeriode8);

        while($attribut = $attributMessagePeriode8 -> fetch_row()){
            //on récupere l'IDParent du message pour retrouver son auteur
            $IDParent = substr($attribut[0], sizeof($attribut)-5, 4);
            
            $utilisateurCiblePeriode8 = array();
            //Requete pour savoir à qui l'utilisateur a répondu
            $queryUtilisateurCiblePeriode8 = "SELECT Utilisateur FROM `transition` WHERE `Attribut` like '%IDMsg=".$IDParent."%' AND (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Citer un message' OR `Titre`= 'Repondre a un message')";
            $utilisateurCiblePeriode8[0] = $mysqli->query($queryUtilisateurCiblePeriode8)-> fetch_row()[0];

            array_push($listUsers, $utilisateurCiblePeriode8[0]);
            
            $i =0;
            foreach ($listUsers as $value)
            {
                if($value == $utilisateurCiblePeriode8[0])
                    $i++;
            }
        
            //RésultatJSON
            if($i > 0){
                $JSONResult[$nom]["LuPeriode8"][$utilisateurCiblePeriode8[0]] = $i;
            
            }
        }  
    } 

    
    //Création d'un fichier JSON avec les résultats
    $fp = fopen('results.json', 'w');
    fwrite($fp, json_encode($JSONResult));
    fclose($fp);
    mysqli_close($mysqli);   

?>