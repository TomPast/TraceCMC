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

        $MessagePeriode = array();
        $queryMessagePeriode1 = "SELECT Count(IDTran) as nb FROM `transition` WHERE (`Titre`= 'Poster un nouveau message' OR `Titre`= 'Repondre a un message') AND `Utilisateur` ='".$nom."' AND `Date` BETWEEN '2009-02-01' AND '2009-02-15'";
        $MessagePeriode[0] = $mysqli->query($queryMessagePeriode1)-> fetch_row()[0];

        echo $MessagePeriode[0];
        echo "<br/>";
    }


?>
