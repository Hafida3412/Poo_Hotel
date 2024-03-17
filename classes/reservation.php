<?php

class Reservation{

private $nomClient;
private $prenomClient;
private DateTime $dateDebut;
private DateTime $dateFin;
private int $numeroChambre;

public function __construct( Client $nomclient, Client $prenomClient, DateTime $dateDebut,
 DateTime $dateFin, int $numeroChambre){
    $this->nomClient;
    $this->prenomClient = $prenomClient;
    $this->dateDebut = new DateTime;
    $this->dateFin = new DateTime;
    $this->numeroChambre = $numeroChambre;

 }

public function getNomClient(): string
{
return $this->nomClient;
}


public function setNomClient(string $nomClient)
{
$this->nomClient = $nomClient;

return $this;
}

public function getPrenomClient(): string
{
return $this->prenomClient;
}

public function setPrenomClient(string $prenomClient)
{
$this->prenomClient = $prenomClient;

return $this;
}

public function getDateDebut()
{
return $this->dateDebut->format("d-m-Y");;
}

public function setDateDebut($dateDebut)
{
$this->dateDebut = $dateDebut->format("d-m-Y");;

return $this;
}

public function getDateFin()
{
return $this->dateFin->format("d-m-Y");
}

public function setDateFin($dateFin)
{
$this->dateFin = $dateFin->format("d-m-Y");

return $this;
}

public function getNumeroChambre(): int
{
return $this->numeroChambre;
}

public function setNumeroChambre(int $numeroChambre)
{
$this->numeroChambre = $numeroChambre;

return $this;
}

public function getInfos(){
   return $this->getNomClient(). " ".$this->getPrenomClient(). " ".$this->getDateDebut().
    " ".$this-> getDateFin(). " ".$this->getNumeroChambre();
}
}