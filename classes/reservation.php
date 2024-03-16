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
    $this->dateDebut = $dateDebut;
    $this->dateFin = $dateFin;
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

public function getDateDebut(): DateTime
{
return $this->dateDebut;
}

public function setDateDebut(DateTime $dateDebut)
{
$this->dateDebut = $dateDebut;

return $this;
}

public function getDateFin(): DateTime
{
return $this->dateFin;
}

public function setDateFin(DateTime $dateFin)
{
$this->dateFin = $dateFin;

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
}