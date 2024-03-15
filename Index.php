<?php

//require "Hotel.php";
//require "Client.php";
//require  "Chambre.php;


spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});

$Virgile = new Client("Virgile", "GIBELLO");
$Micka = new Client("Micka", "MURMANN");

/*$r1 = new Reservation("$Hilton", "$Virgile","$numeroChambre", "2021-01-01", "2021-01-01");*/

$h1 = new Hotel("Hilton", "10 rue de la Seine", "67000", "Strasbourg");


echo $h1->getInfos();
echo $h1->afficherHotel();

echo $Virgile->afficherClient();
echo $Micka->afficherClient();