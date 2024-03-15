<?php

class Hotel{
    private string $raisonSociale;
    private string $adresse;
    private string $cp;
    private string $ville;
    private array $reservations;

    public function __construct(string $raisonSociale, string $adresse, $cp, string $ville){
        $this->raisonSociale = $raisonSociale;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->reservations =[];
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
    public function afficherHotel(){
        $result = "<h1>Nom de l'hôtel: $this<h1>";
    }
    
    public function getAdresseComplete(){
        return $this->adresse." ".$this->cp." ".$this->ville;
    }
    
    public function getInfos(){
        return "<h1>L'adresse de" .$this ." est " .$this->getAdresseComplete();
}
public function getReservations():string
{
return $this->reservations;
}


public function setReservations(string $reservations)
{
$this->reservations = $reservations;

return $this;
}

public function addReservation(Reservation $Reservation){
    $this->reservations[] = $reservation;
}

public function afficherClients(){
    $result = "<h2>Clients de $this</h2>";
    
    foreach ($this->reservations as $reservation){
        $result .= $reservation->getClient()." (".$raisonSociale->getraisonSociale(). $adresse->getAdresseComplete();

    return $result;  
}
}
}