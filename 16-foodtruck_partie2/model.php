<?php

function liste($connexion)
{
    $requete = 'SELECT * FROM food';
    $resultat = $connexion->query($requete);
    $listeTruck = $resultat->fetchAll(PDO::FETCH_ASSOC);

    return $listeTruck;
}

function getcamion($id,$connexion)
{
    $requete = "SELECT*FROM food WHERE id=$id";
    $resultat = $connexion->query($requete);
    $listecamion = $resultat->fetch(PDO::FETCH_ASSOC);

    // var_dump($id);
    // var_dump($requete);
    // var_dump($resultat);
    // var_dump($listecamion);
    return $listecamion;
}

function validModif($id,$adresse,$nom_truck,$connexion){
    $requete = $connexion->prepare("UPDATE food SET nom_truck=:nom_truck,adresse=:adresse WHERE id=:id");
    $requete->bindParam(":id",$id);
    $requete->bindParam(":nom_truck",$nom_truck);
    $requete->bindParam(":adresse",$adresse);

    $resultat =$requete->execute();
    return $resultat;

}

function supprimer($id,$connexion){
    $requete = $connexion->prepare("DELETE FROM food WHERE id=:id");
    $requete->bindParam(":id",$id);
    $resultat =$requete->execute();

    // var_dump($id);
    // var_dump($requete);
    // var_dump($resultat);
    return $resultat;
}

function ajouter($connexion,$nom_truck,$adresse){
    $requete = $connexion->prepare("INSERT INTO food (id,nom_truck,adresse) VALUES (NULL,:nom_truck,:adresse);");

     $requete->bindParam(":nom_truck",$nom_truck);
    $requete->bindParam(":adresse",$adresse);
    $resultat =$requete->execute();
    //  var_dump($nom_truck);
    //  var_dump($adresse);
    // var_dump($requete);
    // var_dump($resultat);
    // var_dump($connexion->errorInfo());

    return $resultat;

}


function ajouterSpe($connexion,$nom){
    $requete = $connexion->prepare("INSERT INTO typecuisine (id_typeCuisine,nom) VALUES (NULL,:nom);");

     $requete->bindParam(":nom",$nom);
    $resultat =$requete->execute();
    //  var_dump($nom_truck);
    //  var_dump($adresse);
    // var_dump($requete);
    // var_dump($resultat);
    // var_dump($connexion->errorInfo());

    return $resultat;

}