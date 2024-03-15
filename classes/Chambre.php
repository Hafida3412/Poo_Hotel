<?php

class Chambre{
    private string $numeroChambre;
    private string $nbLit;
    private string $wifi;
    private string $prix;
    private string $reservee;
    private array $reservations;



    public function __construct(string $numeroChambre, string $nbLit, string $wifi,
    string $prix, string $reservee){
        $this->numeroChambre = $numeroChambre;
        $this->nbLit = $nbLit;
        $this->wifi = $wifi;
        $this->prix = $prix;
        $this->reservee = $reservee;
        $this->reservations =[];
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

    public function getNbLit(): int
    {
        return $this->nbLit;
    }

    public function setNbLit(int $nbLit)
    {
        $this->nbLit = $nbLit;

        return $this;
    }

    public function getWifi(): bool
    {
        return $this->wifi;
    }

    public function setWifi(bool $wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getReservee(): bool
    {
        return $this->reservee;
    }

    public function setReservee(bool $reservee)
    {
        $this->reservee = $reservee;

        return $this;
     }

    public function getReservations()
    {
        return $this->reservations;
    }

    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function addReservation(Reservation $Reservation){
        $this->reservations[] = $reservation;
}
    
    public function afficherClients(){
    $result = "<h4> Chambre de $this</h2>";

    foreach ($this->reservations as $reservation){
    $result .= $reservation->getClient()."(".$numeroChambre->getNumeroChambre()."(" .$nbLit->getNbLit(). $prix->getPrix() 
    .$wifi->getWifi().")" ."du " $reservation->getDateDebut(). " au ".$reservation->getDateFin().")<br>";
}
    return $result;
    }

    public function __toString(){
        return $this-> afficherClients;
    }
}