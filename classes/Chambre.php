<?php

class Chambre{
    private int $numeroChambre;
    private string $nbLit;
    private bool $wifi;
    private float $prix;
    private string $etat;
    private array $reservations;


    public function __construct(int $numeroChambre, string $nbLit, bool $wifi,
    float $prix, string $etat){
        $this->numeroChambre = $numeroChambre;
        $this->nbLit = $nbLit;
        $this->wifi = $wifi;
        $this->prix = $prix;
        $this->etat = $etat;
        $this->reservations = [];
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
    
    public function addReservations(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
    public function afficherWifi(){
        return $this->wifi? 'Wifi disponible' : 'Wifi non disponible';
    }

    public function afficheretat(){
        return $this->etat? 'disponible' : 'chambre réservée';
    }
    public function afficherChambre(){
       echo "Chambre:". $this->getNumeroChambre(). " ".$this->getPrix()." ".$this->getWifi()." ".$this->getEtat()."<br>";

       foreach($this->reservations as $reservation){
        echo "reservation:".$reservation->getClient(). " ".$reservation->getNumeroChambre()
        . " " .$reservation->getDateDebut()." ".$reservation->getDateFin(). "<br>";
    }

}
}