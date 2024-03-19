<?php

class Reservation{

private Client $Client;
private DateTime $dateDebut;
private DateTime $dateFin;
private Chambre $chambre;

public function __construct( Client $client, string $dateDebut,
string $dateFin, Chambre $chambre){
   $this->Client = $client;
   $this->dateDebut = new DateTime($dateDebut);
   $this->dateFin = new DateTime($dateFin);
   $this->chambre = $chambre;
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

public function getChambre()
{
return $this->chambre;
}

public function setChambre($chambre)
{
$this->chambre = $chambre;

return $this;
}



public function calculerNbNuits(){
   $diff= $this->dateDebut->diff($this->dateFin);
   return $diff->days;
}

public function calculerMontantTotal(){
   $nbNuits = $this->calculerNbNuits();
   return $nbNuits * $this->chambre->getPrix(); //chambre get =prix
}

}



 


