<?php

class Reservation{

private Client $client;
private DateTime $dateDebut;
private DateTime $dateFin;
private Chambre $chambre;

/********************FUNCTION CONSTRUCT****************************/
public function __construct( Client $client, string $dateDebut,
string $dateFin, Chambre $chambre){
   $this->client = $client;
   $this->dateDebut = new DateTime($dateDebut);
   $this->dateFin = new DateTime($dateFin);
   $this->chambre = $chambre;
   $this->chambre->setEtat(false);/*lorsque la chambre est réservée, elle ne peut pas être disponible*/
   $this->chambre->getHotel()->addReservation($this);/*la chambre appartient à un hôtel. Nous lui rajoutons addReservations*/
   $this->client->addReservation($this);/*rajout des réservations*/
}
/*********************GETTERS AND SETTERS**************************/  
public function getClient()
{
return $this->client;
}
   
public function setClient($Client)
{
$this->client = $Client;
   
return $this;
}

public function getDateDebut()
{
return $this->dateDebut->format("d-m-Y");/*PRECISION DU FORMAT DE LA DATE*/
}

public function setDateDebut($dateDebut)
{
$this->dateDebut = $dateDebut->format("d-m-Y");

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

/*******************FUNCTION CALCULER NBNUITS********************/
public function calculerNbNuits(){
   $diff= $this->dateDebut->diff($this->dateFin);
   return $diff->days;
}

/********************FUNCTION POUR CALCULER LE TOTAL ************/
public function calculerMontantTotal(){
   $nbNuits = $this->calculerNbNuits();
   return "Montant total:". $nbNuits * $this->chambre->getPrix()."€<br>"; //chambre get =prix
}

/**********************AFFICHER RESERVATIONS DE L HOTEL************/
public function afficherReservation(){
   $result= "Hôtel:".$this->chambre->getHotel()->addReservation($this). "Chambre:" .$this->getChambre(). "du"
   .$this->getDateDebut(). "au" .$this->getDateFin();   
}

}



 


