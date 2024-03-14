<?php

//require "Hotel.php";
//require "Client.php";
//require  "Chambre.php;


spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});

echo