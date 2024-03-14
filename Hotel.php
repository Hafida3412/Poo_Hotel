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

    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }
}