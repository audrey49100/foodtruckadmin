<?php

include 'model.php';
include 'view.php';
include 'connect.php';


echo displayHeader();

$listeTruck = liste($connexion);
echo displayListe($listeTruck);

$fiche = ficheModif($modif,$connexion);
echo displayFormModif($fiche);

$camion = 0;
if (isset ($_POST['truck'])){
    $camion = $_POST['truck'];
}


if (isset($_GET['page'])){
    
    switch ($_GET['page']){
        
        case 'modifier':
            $listeTruck = liste($connexion);
            echo displayModifier($listeTruck);
        break;

        case 'formModif':
            $modif = $_POST['truck'];
            $liste = ficheModif($modif, $connexion);
            echo displayFormModif($liste);
        break;

    }
}


echo displayFooter();