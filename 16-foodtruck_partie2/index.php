<?php

include 'model.php';
include 'view.php';
include 'connect.php';

echo displayHeader();

$listeTruck=liste($connexion);

echo displayListe($listeTruck);


echo displayFooter();   