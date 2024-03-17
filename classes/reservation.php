<?php

class Reservation{

private Client $Client;
private DateTime $dateDebut;
private DateTime $dateFin;
private int $numeroChambre;
private float $prix;

public function __construct( Client $client, string $dateDebut,
string $dateFin, int $numeroChambre, float $prix){
   $this->Client = $client;
   $this->dateDebut = new DateTime($dateDebut);
   $this->dateFin = new DateTime($dateFin);
   $this->numeroChambre = $numeroChambre;
   $this->prix = $prix;
}
   
public function getClient()
{
return $this->Client;
}
   
public function setClient($Client)
{
$this->Client = $Client;
   
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
public function getPrix()
{
return $this->prix;
}

public function setPrix($prix)
{
$this->prix = $prix;

return $this;
}

public function getNbNuits(){
   $interval = $this->dateDebut->diff($this->dateFin);
   return $interval->days;
}

public function calculerMontantTotal(){
   return $this->getNbNuits() * $this->getPrix();
}

 }


