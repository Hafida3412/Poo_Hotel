<?php

class Hotel{
    private string $raisonSociale;
    private string $adresse;
    private string $cp;
    private string $ville;

    private array $reservations;
    private array $chambres;

    public function __construct(string $raisonSociale, string $adresse, $cp, string $ville){
        $this->raisonSociale = $raisonSociale;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->reservations = [];
        $this->chambres = [];
    }

    public function addChambre(Chambre $chambre){

        $this->chambres[] = $chambre;
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


    public function getAdresseComplete(){
        return $this->adresse." ".$this->cp." ".$this->ville;
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
    public function getChambres()
    {
    return $this->chambres;
    }
        
    public function setChambres($chambres)
    {
    $this->chambres = $chambres;
        
    return $this;
    }

    /********************CALCUL DU NOMBRE DE CHAMBRES***************************/
    public function calcNbChambre(){
        
        $nbChambre = count($this->chambres);
        return $nbChambre;
    }
    /********************DISPONIBILTE DES CHAMBRES******************************/
    public function disponibilite(){
        $nombreChambre=0;
        foreach($this->chambres as $chambre){
        if($chambre->getEtat()==true){
            $nombreChambre++; //POUR VERIFIER ETAT DE LA CHAMBRE SUIVANTE
        }
        }
        return $nombreChambre;
    }

    public function nbChambreReserved(){
        $diff= $this->calcNbChambre() - $this->disponibilite();
        return $diff;
    
    }
    /*********************INFOS HOTEL*******************************************/
    public function afficherInfoHotel(){
        return  $this->getRaisonSociale(). "<br>". $this->getAdresseComplete(). "<br>Nombre de chambres : ".$this->calcNbChambre()."<br>"; 
    }
    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
    public function afficherReservationsClient (){
    $result = "<h1>Reservation de" .$this."</h1>";
            
    foreach ($this->reservations as $reservation){
    $result .= $reservation->getClient()." ".$reservation->getNumeroChambre()
    . " " .$reservation->getDateDebut()." ".$reservation->getDateFin(). $reservation->getPrix(). "<br>";
    }
    return $result;
    }

    public function afficheretat(){
        foreach($this->chambres as $chambre){
        echo "Chambre:" .$chambre->getNumeroChambre(). $chambre->getPrix(). $chambre->getWifi().
        $chambre->getEtat()."<br>";
    }
    }

    public function __toString(){
        return $this->raisonSociale;
    }


}




    
        
        
        
        
       
    