<?php

function liste($connexion){
    $requete="SELECT*FROM food";
    $resultat=$connexion->query($requete);
    $listeTruck=$resultat->fetchAll(PDO::FETCH_ASSOC);
    return  $listeTruck;

}