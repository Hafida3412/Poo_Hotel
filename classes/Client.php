<?php

class Client{
    private string $nom;
    private string $prenom;

    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
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
    public function __toString(){
        return $this->nom." ".$this->prenom;
    }

    public function afficherClient(){
        $result= "<h2>client: $this</h2>";
        return $result;
    }
    }
