<?php

  /*  require("reservation.php");
    require("Hotel.php");
    require("client.php");
    require("chambre.php");*/

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});

$client1 = new Client("GIBELLO","Virgile", 17, "01-01-2021", "12-01-2021");
$client2 = new Client("MURMANN","Micka", 3, "11-03-2021", "11-03-2021");
$client3 = new Client("MURMANN ", "Micka", 4 ,"01-04-2021","01-04-2021");

$Hilton = new Hotel("Hilton","10 route de la gare", "67000", "Strabourg",30, 3);
$Regent = new Hotel("Regent ", "10 rue de la Seine","75000", "Paris", 30 ,3);



echo $Hilton->afficherInfoHotel();

echo $Regent->afficherInfoHotel();

echo $Hilton->afficherReservationsClient();

echo $client1->getInfos();

echo $client2->getInfos();

echo $client3->getInfos();

echo $Regent->afficherReservationsClient();

