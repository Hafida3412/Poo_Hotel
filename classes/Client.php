<?php

class Client{
    private string $nom;
    private string $prenom;

    private array $reservations;

    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->reservations =[];
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

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


    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
    public function afficherClient(){
        $result= "<h2>client: $this</h2>";
        return $result;
    }
    
    public function afficherHotels(){
        $result = "<h3>Hôtels de $this</h3>";
        
        foreach ($this->reservations as $reservation){
            $result .= $reservation->getClient()." (".$reservation->getDateDebut(). " au ".$reservation->getDateFin().")<br>";
        }
        return $result;
    }
    public function __toString(){
        return $this->nom." ".$this->prenom;
    }

}
