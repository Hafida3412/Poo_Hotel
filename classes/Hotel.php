<?php

class Hotel{
    private string $raisonSociale;
    private string $adresse;
    private string $cp;
    private string $ville;

    public function __construct(string $raisonSociale, string $adresse, $cp, string $ville){
        $this->raisonSociale = $raisonSociale;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
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

    public function __toString(){
        return $this->raisonSociale;
    }
    public function afficherHotel(){
        $result = "<h1>Nom de l'hôtel: $this<h1>";
    }

    public function getInfos(){
        return $this. " se situe à l'adresse suivante: " .$this->getAdresse."<br>;
    }
}