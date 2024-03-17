<?php

class Client{
    private string $nom;
    private string $prenom;
    private string $numeroChambre;
    private $dateDebut;
    private $dateFin;
    private array $reservations;

   

    public function __construct(string $nom, string $prenom, string $numeroChambre, $dateDebut,
     $dateFin ){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroChambre = $numeroChambre;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->reservations = [];
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
   
    public function getNumeroChambre(): string
    {
        return $this->numeroChambre;
    }
    
    public function setNumeroChambre(string $numeroChambre)
    {
        $this->numeroChambre = $numeroChambre;
        
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
    
    
    public function getDateFin(){
        return $this->dateFin;
    }
    
    
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
        
        return $this;
    }
    public function __toString(){
        return $this->nom." ".$this->prenom;
    }
    public function getInfos(){
        return "<h2>".$this. "Chambre:".$this->getNumeroChambre()." - du ".$this->getDateDebut().
        " au ".$this->getDateFin()."</h2>";
    }
   
    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
    public function afficherReservationsClient (){
        return "<h3>Reservation de " .$this. ": </h3>";
        
        foreach ($this->reservations as $reservation){
            echo "reservation:".$reservation->getClient(). " ".$reservation->getNumeroChambre()
            . " " .$reservation->getDateDebut()." ".$reservation->getDateFin(). "<br>";
        }
        }
    }
    

