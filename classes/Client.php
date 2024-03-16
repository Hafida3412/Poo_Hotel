<?php

class Client{
    private string $nom;
    private string $prenom;
    private string $numeroChambre;
    private dateTime $dateDebut;
    private dateTime $dateFin;
   

    public function __construct(string $nom, string $prenom, string $numeroChambre, DateTime $dateDebut,
     DateTime $dateFin ){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroChambre = $numeroChambre;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
    
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
    
    public function getDateDebut(): DateTime
    {
        return $this->dateDebut;
    }
    
    public function setDateDebut(DateTime $dateDebut)
    {
        $this->dateDebut = $dateDebut;
        
        return $this;
    }
    
    
    public function getDateFin(): DateTime
    {
        return $this->dateFin;
    }
    
    
    public function setDateFin(DateTime $dateFin)
    {
        $this->dateFin = $dateFin;
        
        return $this;
    }
    public function afficherClient(){
        $result= "<h2>client: $this</h2>";
        return $result;
    }
    
    public function __toString(){
        return $this->nom." ".$this->prenom;
    }
}
