<?php

class Chambre{
    private int $numeroChambre;
    private string $nbLit;
    private bool $wifi;
    private float $prix;
    private string $etat;


    public function __construct(int $numeroChambre, string $nbLit, bool $wifi,
    float $prix, string $etat){
        $this->numeroChambre = $numeroChambre;
        $this->nbLit = $nbLit;
        $this->wifi = $wifi;
        $this->prix = $prix;
        $this->etat = $etat;
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
    
    public function getInfos(){
       return $this->getNumeroChambre()." ".$this->getNumeroChambre(). " ". $this->getNbLit().
        " ".$this->getWifi()." ".$this->getPrix()." ".$this->getEtat();
    }

     }
