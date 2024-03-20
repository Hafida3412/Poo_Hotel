<?php

class Client{
    private string $nom;
    private string $prenom;
    private string $numeroChambre;
    private $dateDebut;
    private $dateFin;
    private array $reservations;//AJOUT ARRAY RESERVATIONS

   
/**********************FUNCTION CONSTRUCT**************************/
    public function __construct(string $nom, string $prenom, string $numeroChambre, $dateDebut,
     $dateFin ){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroChambre = $numeroChambre;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->reservations = [];
    }
/*********************GETTERS AND SETTERS**************************/
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
    public function getReservations()
    {
        return $this->reservations;
    }

    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }
 /**************************AFFICHER INFOS HOTEL********************/   
        public function getInfos(){
            return "<h4>".$this. "Chambre:".$this->getNumeroChambre()." - du ".$this->getDateDebut().
            " au ".$this->getDateFin()."</h4>";
        }
 /*************************ADD RESERVATION**************************/       
        public function addReservation(Reservation $reservation){
            $this->reservations[] = $reservation;
        }
/**************************AFFICHER RESERVATIONS CLIENT**************/
        public function afficherReservationsClient (){
            $result= "<h5>Reservation de " .$this. ": </h5>";
            
            foreach ($this->reservations as $reservation){
                $result .= $reservation->getClient()->getNom()."<br>". "<br>". $reservation->calculerMontantTotal()."<br>".
                 " Chambre: ".$this->getNumeroChambre().
                 ", du " .$reservation->getDateDebut()." au ".$reservation->getDateFin(). "<br>";
            }

            $result .= "<br>"."<br>";
            return $result;
        }
/***************************FUNCTION TOSTRING************************/        
    public function __toString(){
        return $this->nom." ".$this->prenom;
    }
        
}
    

