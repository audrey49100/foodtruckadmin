<?php

include 'model.php';
include 'view.php';
include 'connect.php';


echo displayHeader();

$listeTruck = liste($connexion);
echo displayListe($listeTruck);


if (isset($_GET['page'])){
    
    switch ($_GET['page']){
        
        case 'modifier':
            $listeTruck = liste($connexion);
            echo displayModifier($listeTruck);
        break;
    }
}


echo displayFooter();