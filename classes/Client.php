<?php

class Client{
    private string $nom;
    private string $prenom;
    private string $numeroChambre;
    private DateTime $dateDebut;
    private DateTime $dateFin;
   

    public function __construct(string $nom, string $prenom, string $numeroChambre, DateTime $dateDebut,
     DateTime $dateFin ){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroChambre = $numeroChambre;
        $this->dateDebut = new DateTime;
        $this->dateFin = new DateTime;
    
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
        return $this->dateDebut->format("d-m-Y");
    }
    
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut->format("d-m-Y");
        
        return $this;
    }
    
    
    public function getDateFin(){
        return $this->dateFin->format("d-m-Y");
    }
    
    
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin->format("d-m-Y");
        
        return $this;
    }
   

    public function getInfos(){
        return "<h2>".$this. " ".$this->getNumeroChambre()." ".$this->getDateDebut().
         " ".$this->getDateFin()."</h2>";
    }
    
    public function __toString(){
        return $this->nom." ".$this->prenom;
    }
}
