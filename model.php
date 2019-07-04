<?php

function liste($connexion){
    $requete = 'SELECT * FROM food';
    $resultat = $connexion -> query ($requete);
    $listeTruck = $resultat -> fetchAll(PDO::FETCH_ASSOC);

    return $listeTruck;
}

function ficheModif ($modif,$connexion){
    $requete = 'SELECT * FROM food WHERE nom = $modif';
    $resultat = $connexion -> query ($requete);
    $fiche = $resultat -> fetchAll(PDO::FETCH_ASSOC);

    return $fiche;

}
