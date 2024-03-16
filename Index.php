<?php

//require "Hotel.php";
//require "Client.php";
//require "Chambre.php";
//require "Reservation.php";
    

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});



echo $h1->getInfos();
echo $h1->afficherHotel();

echo $Virgile->afficherClient();
echo $Micka->afficherClient();