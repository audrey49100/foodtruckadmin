<?php

include 'model.php';
include 'view.php';
include 'connect.php';


echo displayHeader();

$listeTruck = liste($connexion);
echo displayListe($listeTruck);


$truck = 0;
if (isset ($_POST['typeTruck'])){
    $truck = $_POST['typeTruck'];
}



if (isset($_GET['page'])){
    
    switch ($_GET['page']){

        case 'ajout':
            $listeTruck = liste($connexion);
            echo displayAjout($listeTruck);
        break;
    }
}


echo displayFooter();