<?php
    /*
    *  Moulinette PHP qui va ressortir les informations nécéssaires pour la motivation uniquement et les stocker dans un fichier JSON : resultMotivation.json
    */
    include('connect.php');
    $mysqli= new mysqli($servername, $username, $password, $database);

    $JSONResult = array();

    $queryUsers = "SELECT DISTINCT Utilisateur From transition";
    $resultUsers = $mysqli->query($queryUsers);
    while($r = $resultUsers -> fetch_row()){
        $nom = $r[0];
        //Contient le nombre de message écrit (poste ou réponse) par période de 15 jours
        $MessagePeriode = array();
        $queryMessagePeriode1 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Repondre a un message' OR `Titre`= 'Citer un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-01' AND '2009-02-15'";
        $MessagePeriode[0] = $mysqli->query($queryMessagePeriode1)-> fetch_row()[0];

        $queryMessagePeriode2 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Repondre a un message' OR `Titre`= 'Citer un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-15' AND '2009-02-29'";
        $MessagePeriode[1] = $mysqli->query($queryMessagePeriode2)-> fetch_row()[0];

        $queryMessagePeriode3 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Repondre a un message' OR `Titre`= 'Citer un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-01' AND '2009-03-15'";
        $MessagePeriode[2] = $mysqli->query($queryMessagePeriode3)-> fetch_row()[0];

        $queryMessagePeriode4 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Repondre a un message' OR `Titre`= 'Citer un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-15' AND '2009-03-31'";
        $MessagePeriode[3] = $mysqli->query($queryMessagePeriode4)-> fetch_row()[0];

        $queryMessagePeriode5 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Repondre a un message' OR `Titre`= 'Citer un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-01' AND '2009-04-15'";
        $MessagePeriode[4] = $mysqli->query($queryMessagePeriode5)-> fetch_row()[0];

        $queryMessagePeriode6 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Repondre a un message' OR `Titre`= 'Citer un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-15' AND '2009-04-31'";
        $MessagePeriode[5] = $mysqli->query($queryMessagePeriode6)-> fetch_row()[0];

        $queryMessagePeriode7 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Repondre a un message' OR `Titre`= 'Citer un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-01' AND '2009-05-15'";
        $MessagePeriode[6] = $mysqli->query($queryMessagePeriode7)-> fetch_row()[0];

        $queryMessagePeriode8 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Repondre a un message' OR `Titre`= 'Citer un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-15' AND '2009-05-31'";
        $MessagePeriode[7] = $mysqli->query($queryMessagePeriode8)-> fetch_row()[0];

        //Contient le nombre de message affiché par période de 15 jours
        $LecturePeriode = array();
        $queryLecturePeriode1 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Afficher le contenu d\'un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-01' AND '2009-02-15'";
        $LecturePeriode[0] = $mysqli->query($queryLecturePeriode1)-> fetch_row()[0];

        $queryLecturePeriode2 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Afficher le contenu d\'un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-15' AND '2009-02-29'";
        $LecturePeriode[1] = $mysqli->query($queryLecturePeriode2)-> fetch_row()[0];

        $queryLecturePeriode3 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Afficher le contenu d\'un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-01' AND '2009-03-15'";
        $LecturePeriode[2] = $mysqli->query($queryLecturePeriode3)-> fetch_row()[0];

        $queryLecturePeriode4 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Afficher le contenu d\'un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-15' AND '2009-03-31'";
        $LecturePeriode[3] = $mysqli->query($queryLecturePeriode4)-> fetch_row()[0];

        $queryLecturePeriode5 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Afficher le contenu d\'un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-01' AND '2009-04-15'";
        $LecturePeriode[4] = $mysqli->query($queryLecturePeriode5)-> fetch_row()[0];

        $queryLecturePeriode6 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Afficher le contenu d\'un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-15' AND '2009-04-31'";
        $LecturePeriode[5] = $mysqli->query($queryLecturePeriode6)-> fetch_row()[0];

        $queryLecturePeriode7 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Afficher le contenu d\'un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-01' AND '2009-05-15'";
        $LecturePeriode[6] = $mysqli->query($queryLecturePeriode7)-> fetch_row()[0];

        $queryLecturePeriode8 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Afficher le contenu d\'un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-15' AND '2009-05-31'";
        $LecturePeriode[7] = $mysqli->query($queryLecturePeriode8)-> fetch_row()[0];

        //Contient le nombre de documents (posté ou téléchargé) par période de 15 jours
        $DocumentPeriode = array();
        $queryDocumentPeriode1 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Download un fichier dans le message' OR `Titre`= 'Upload un ficher avec le message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-01' AND '2009-02-15'";
        $DocumentPeriode[0] = $mysqli->query($queryDocumentPeriode1)-> fetch_row()[0];

        $queryDocumentPeriode2 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Download un fichier dans le message' OR `Titre`= 'Upload un ficher avec le message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-15' AND '2009-02-29'";
        $DocumentPeriode[1] = $mysqli->query($queryDocumentPeriode2)-> fetch_row()[0];

        $queryDocumentPeriode3 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Download un fichier dans le message' OR `Titre`= 'Upload un ficher avec le message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-01' AND '2009-03-15'";
        $DocumentPeriode[2] = $mysqli->query($queryDocumentPeriode3)-> fetch_row()[0];

        $queryDocumentPeriode4 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Download un fichier dans le message' OR `Titre`= 'Upload un ficher avec le message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-15' AND '2009-03-31'";
        $DocumentPeriode[3] = $mysqli->query($queryDocumentPeriode4)-> fetch_row()[0];

        $queryDocumentPeriode5 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Download un fichier dans le message' OR `Titre`= 'Upload un ficher avec le message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-01' AND '2009-04-15'";
        $DocumentPeriode[4] = $mysqli->query($queryDocumentPeriode5)-> fetch_row()[0];

        $queryDocumentPeriode6 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Download un fichier dans le message' OR `Titre`= 'Upload un ficher avec le message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-15' AND '2009-04-31'";
        $DocumentPeriode[5] = $mysqli->query($queryDocumentPeriode6)-> fetch_row()[0];

        $queryDocumentPeriode7 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Download un fichier dans le message' OR `Titre`= 'Upload un ficher avec le message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-01' AND '2009-05-15'";
        $DocumentPeriode[6] = $mysqli->query($queryDocumentPeriode7)-> fetch_row()[0];

        $queryDocumentPeriode8 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Download un fichier dans le message' OR `Titre`= 'Upload un ficher avec le message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-15' AND '2009-05-31'";
        $DocumentPeriode[7] = $mysqli->query($queryDocumentPeriode8)-> fetch_row()[0];

        //Contient le nombre de connexion (posté ou téléchargé) par période de 15 jours
        $ConnexionPeriode = array();
        $queryConnexionPeriode1 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Connexion') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-01' AND '2009-02-15'";
        $ConnexionPeriode[0] = $mysqli->query($queryConnexionPeriode1)-> fetch_row()[0];

        $queryConnexionPeriode2 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Connexion') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-15' AND '2009-02-29'";
        $ConnexionPeriode[1] = $mysqli->query($queryConnexionPeriode2)-> fetch_row()[0];

        $queryConnexionPeriode3 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Connexion') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-01' AND '2009-03-15'";
        $ConnexionPeriode[2] = $mysqli->query($queryConnexionPeriode3)-> fetch_row()[0];

        $queryConnexionPeriode4 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Connexion') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-03-15' AND '2009-03-31'";
        $ConnexionPeriode[3] = $mysqli->query($queryConnexionPeriode4)-> fetch_row()[0];

        $queryConnexionPeriode5 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Connexion') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-01' AND '2009-04-15'";
        $ConnexionPeriode[4] = $mysqli->query($queryConnexionPeriode5)-> fetch_row()[0];

        $queryConnexionPeriode6 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Connexion') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-04-15' AND '2009-04-31'";
        $ConnexionPeriode[5] = $mysqli->query($queryConnexionPeriode6)-> fetch_row()[0];

        $queryConnexionPeriode7 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Connexion') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-01' AND '2009-05-15'";
        $ConnexionPeriode[6] = $mysqli->query($queryConnexionPeriode7)-> fetch_row()[0];

        $queryConnexionPeriode8 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Connexion') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-05-15' AND '2009-05-31'";
        $ConnexionPeriode[7] = $mysqli->query($queryConnexionPeriode8)-> fetch_row()[0];

        $MotivationPeriode = array();
        for ($i = 0; $i <= 7; $i++) {
            $MotivationPeriode[$i] = $MessagePeriode[$i] * 1 + $LecturePeriode[$i] * 0.5 + $DocumentPeriode[$i] * 1.3 + $ConnexionPeriode[$i] * 0.7;
            $MotivationPeriode[$i] = round(($MotivationPeriode[$i]/1000) * 100,2);
        }


        $JSONResult[$nom]["MessagePeriode"] = $MessagePeriode;
        $JSONResult[$nom]["LecturePeriode"] = $LecturePeriode;
        $JSONResult[$nom]["DocumentPeriode"] = $DocumentPeriode;
        $JSONResult[$nom]["ConnexionPeriode"] = $ConnexionPeriode;
        $JSONResult[$nom]["MotivationPeriode"] = $MotivationPeriode;
    }

    //Création d'un fichier JSON avec les résultats
    $fp = fopen('resultJSON/resultMotivation.json', 'w');
    fwrite($fp, json_encode($JSONResult));
    fclose($fp);
    mysqli_close($mysqli);
?>
