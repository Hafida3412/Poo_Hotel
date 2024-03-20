<?php

class Chambre{
    private int $numeroChambre;
    private string $nbLit;
    private bool $wifi;
    private float $prix;
    private bool $etat;
    private array $reservations;//AJOUT ARRAY RESERVATIONS

    private Hotel $hotel;

/************************FUNCTION CONSTRUCT*************************/
    public function __construct(int $numeroChambre, string $nbLit, bool $wifi,
    float $prix, Hotel $hotel){
        $this->numeroChambre = $numeroChambre;
        $this->nbLit = $nbLit;
        $this->wifi = $wifi;//POUR LA FUNCTION ETAT WIFI
        $this->prix = $prix;
        $this->etat = true;//POUR LA FUNCTION ETAT DISPO CHBRE
        $this->reservations = [];
        $this->hotel = $hotel;
        $this->hotel->addChambre($this); // add chambre à hotel
    }
/***********************GETTERS AND SETTERS*************************/
    public function getNumeroChambre(): int
    {
        return $this->numeroChambre;
    }

    public function setNumeroChambre(int $numeroChambre)
    {
        $this->numeroChambre = $numeroChambre;

        return $this;
    }

    public function getNbLit(): string//PRECISER L UNITE
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
    
    public function getEtat(): bool
    {
        return $this->etat;
    }
    
    public function setEtat(bool $etat)
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
/***********************ADD RESERVATIONS***************************/   
    public function addReservations(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
/***********************AFFICHER CHAMBRE***************************/
    public function afficherChambre(){
        $result= "Chambre:". $this->getNumeroChambre().
         " ".$this->getNbLit()."lits".
         "-".$this->getPrix()."€ -".$this->getWifi().
         " - dispo:".$this->getEtat()."<br>";
       
        
         }
        
}






