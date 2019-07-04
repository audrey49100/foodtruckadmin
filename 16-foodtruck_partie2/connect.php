<?php

define('SERVER' ,"localhost"); 
define('USER' ,"root");
define('PASSWORD' , "root");
define('BASE' ,"foodtruck");

// au cas ou connexion echoue
try
{
    $connexion = new PDO("mysql:host=".SERVER.";dbname=".BASE, USER, PASSWORD);
}
    catch (Exception $e)
{
    echo 'Erreur : ' . $e->getMessage();
}
