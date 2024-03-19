<?php

class Chambre{
    private int $numeroChambre;
    private string $nbLit;
    private bool $wifi;
    private float $prix;
    private string $etat;
    private array $reservations;

    private Hotel $hotel;


    public function __construct(int $numeroChambre, string $nbLit, bool $wifi,
    float $prix, string $etat, Hotel $hotel){
        $this->numeroChambre = $numeroChambre;
        $this->nbLit = $nbLit;
        $this->wifi = $wifi;
        $this->prix = $prix;
        $this->etat = $etat;
        $this->reservations = [];
        $this->hotel = $hotel;
        $this->hotel->addChambre($this); // add chambre à hotel
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

    public function getNbLit(): string
    {
        return $this->nbLit;
    }

    public function setNbLit(string $nbLit)
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
    
    public function getEtat(): string
    {
        return $this->etat;
    }
    
    public function setEtat(string $etat)
    {
        $this->etat = $etat;
        
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
    public function getHotel()
    {
        return $this->hotel;
    }
    
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;
    
        return $this;
    }
    
    public function addReservations(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
    public function afficherChambre(){
        $result= "Chambre:". $this->getNumeroChambre().
         " ".$this->getNbLit()."lits".
         "-".$this->getPrix()."€ - Wifi:".$this->getWifi().
         " - dispo:".$this->getEtat()."<br>";
       
       foreach($this->reservations as $reservation){
        $result .= $reservation->getRaisonSociale(). " " .$reservation->getClient(). " ".$reservation->getNumeroChambre()
        . " " .$reservation->getDateDebut()." ".$reservation->getDateFin(). "<br>";
    }
       return $result;
    }
    
    public function afficherEtat(){
        
    $etat = true;
    $wifi = true;

    if ($etat=true) {
    echo 'disponible';
    if ($wifi=true) {
        echo 'wifi';
    } else {
        echo "no wifi";
    }
    } else {
    echo "no dispo";
    }
    }
    
public function __toString(){
    return $this->afficherChambre();
}

}



