<?php

class Reservation{

private Hotel $hotel;
private Client $client;
private Reservation $reservation;
private DateTime $dateDebut;
private DateTime $dateFin;

public function __construct(Hotel $hotel, Client $client, Reservation $reservation,
 DateTime $dateDebut, DateTime $dateFin){
    $this->hotel = $hotel;
    $this->client = $client;
    $this->reservation = $reservation;
    $this->dateDebut = $dateDebut;
    $this->dateFin = $dateFin;
 }


public function getHotel()
{
return $this->hotel;
}

public function setHotel($hotel)
{
$this->hotel = $hotel;

return $this;
}

public function getClient()
{
return $this->client;
}

public function setClient($client)
{
$this->client = $client;

return $this;
}

public function getReservation()
{
return $this->reservation;
}

public function setReservation($reservation)
{
$this->reservation = $reservation;

return $this;
}

public function getDateDebut()
{
return $this->dateDebut;
}

public function setDateDebut($dateDebut)
{
$this->dateDebut = $dateDebut;

return $this;
}

public function getDateFin()
{
return $this->dateFin;
}

 public function setDateFin($dateFin)
{
 $this->dateFin = $dateFin;

return $this;
}
}