<?php

include 'model.php';
include 'view.php';
include 'connect.php';


echo displayHeader();

$listeTruck = liste($connexion);
echo displayListe($listeTruck);

// echo displayFormModif();


if (isset($_GET['page'])){
    
    switch ($_GET['page']){
        
        case 'modif':
            if (isset($_GET['id'])){  
        }
        $id=$_GET["id"];
        $listecamion=getcamion($id,$connexion);
        echo displayFormModif($listecamion);
            // $listeTruck = liste($connexion);
            // echo displayModifier($listeTruck);
        break;

        case'validModif':
            $id=$_POST["id"];
            $nom_truck=$_POST["nom_truck"];
            $adresse=$_POST["adresse"];
            echo validModif($id,$adresse,$nom_truck,$connexion);
            break;
        case 'supp':
            // $listeTruck = liste($connexion);
            // echo displayFormModif();
        break;
    }
}


echo displayFooter();