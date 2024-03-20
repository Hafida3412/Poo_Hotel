<?php

class Hotel{
    private string $raisonSociale;
    private string $adresse;
    private string $cp;
    private string $ville;

    private array $reservations;/*AJOUT FILE RESERVATIONS*/
    private array $chambres;/*AJOUT FILE CHAMBRE*/

    public function __construct(string $raisonSociale, string $adresse, $cp, string $ville){
        $this->raisonSociale = $raisonSociale;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->reservations = [];/*AJOUT ARRAY RESERVATIONS*/
        $this->chambres = [];/*AJOUT ARRAY CHAMBRES*/
      
    }

/********************GETTERS AND SETTERS***************************/
    public function getRaisonSociale(): string//PRECISER L UNITE
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
/********************CALCUL DU NOMBRE DE CHAMBRE RESERVED ******************/
public function nbChambreReserved(){
    $nbChambreReserved= $this->calcNbChambre() - $this->disponibilite();
    return $nbChambreReserved;
}

/*********************INFOS HOTEL*******************************************/
public function afficherInfoHotel(){
    return  "<h1>".$this->getRaisonSociale(). "<br>". $this->getAdresseComplete().
    "<br>" ."Nombre de chambres:".$this->calcNbChambre()."<br>". "Nombre de chambres disponibles:".
    $this->disponibilite(). "<br>". "Nombre de chambres réservées:".$this->nbChambreReserved(). "</h1><br>"; 
}
/********************ADD RESERVATIONS********************************/
public function addReservation(Reservation $reservation){
    $this->reservations[] = $reservation;
}
/********************AFFICHER RESERVATION HOTEL**********************/
public function afficherReservationsHotel(){
    $result = "<h2>Reservation de" .$this."</h2>";
    
    foreach ($this->reservations as $reservation){
        $result .= $reservation->getClient()->getNom()."<br>". /*$Chambres->getNumeroChambre()*/
        " " .$reservation->getDateDebut()." ".$reservation->getDateFin(). "<br>";
    }
    return $result;
}
/*********************ADD CHAMBRE***********************************/
public function addChambre(Chambre $chambre){

    $this->chambres[] = $chambre;
}
/**********************AFFICHER ETAT********************************/
public function afficheretat(){
        foreach($this->chambres as $chambre){
        echo "<h3>Chambre:" .$chambre->getNumeroChambre(). $chambre->getPrix().
         $chambre->getWifi(). $chambre->getEtat()."<br></h3>";
    }
    }
/**********************AFFICHER CHAMBRE******************************/    
    public function afficherChambre(){
        /********CREATION D UN TABLEAU**********/
          /*Formule pour afficher les cellules du tableau*/
       echo 
         "<table border=1 cellpadding = '10'> 
         <thead>
           <tr>
               <th>Chambre</th>
               <th>Prix</th>
               <th>wifi</th>
               <th>Etat</th>
            </tr>
          </thead>
          <tbody>";

         foreach($this->chambres as $chambre){
         /********AFFICHER WIFI ET DISPONIBILITE CHAMBRE*/   
            $wifi = $chambre->getWifi() ? "wifi":" ";
            $etat = $chambre->getEtat() ? "disponible":"réservée";

        /***CREATION DES COLONNES DU TABLEAU/CE QUI EST NOTE A L INTERIEUR*/
            echo "
         <tr>
              <td>Chambre:".$chambre->getNumeroChambre(). "</td>
              <td>Prix: ".$chambre->getPrix()."€</td>
              <td>wifi:".$wifi."</td>
              <td>etat:".$etat."</td>
           </tr>";

         }
         "</tbody>
         </table>";

        }

/***************FUNCTION TO STRING**********************************/
    public function __toString(){
        return $this->afficherInfoHotel();
    }
  


}




    
        
        
        
        
       
    