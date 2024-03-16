<?php

class Hotel{
    private string $raisonSociale;
    private string $adresse;
    private string $cp;
    private string $ville;

    private int $nbChambre;
    private int $nbChambreReserved;
    private int $nbChambreDispo;

    public function __construct(string $raisonSociale, string $adresse, $cp, string $ville, int $nbChambre, 
    int $nbChambreReserved, int $nbChambreDispo){
        $this->raisonSociale = $raisonSociale;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->nbChambre = $nbChambre;
        $this->nbChambreReserved = $nbChambreReserved;
        $this->nbChambreDispo = $nbChambreDispo;
    
    }

    public function getRaisonSociale(): string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(string $raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp(): string
    {
        return $this->cp;
    }

    public function setCp(string $cp)
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function setVille(string $ville)
    {
        $this->ville = $ville;

        return $this;
    }

    public function getNbChambre(): int
    {
        return $this->nbChambre;
    }
    
    public function setNbChambre(int $nbChambre)
{
    $this->nbChambre = $nbChambre;
    
    return $this;
}

    public function getNbChambreReserved(): int
{
    return $this->nbChambreReserved;
}


    public function setNbChambreReserved(int $nbChambreReserved)
{
    $this->nbChambreReserved = $nbChambreReserved;
    
    return $this;
}

    public function getNbChambreDispo(): int
{
    return $this->nbChambreDispo;
}

    public function setNbChambreDispo(int $nbChambreDispo)
{
    $this->nbChambreDispo = $nbChambreDispo;
    
    return $this;
}


public function afficherHotel(){
    $result = "<h1>Nom de l'hôtel: $this->raisonSociale<h1>";
}

public function getAdresseComplete(){
    return $this->adresse." ".$this->cp." ".$this->ville;
}

public function getInfos(){
    return "<h1>L'adresse de " .$this ." est " .$this->getAdresseComplete();
}
public function __toString(){
    return $this->raisonSociale;
}
}