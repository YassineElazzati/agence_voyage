<?php

use circuit as GlobalReserver;

class circuit {
    private $Id_Circuit;
    private $Descriptif;
    private $VilleDepart;
    private $VilleArrivee;
    private $PaysDepart;
    private $PaysArrivee;
    private $DateDepart;
    private $Duree;
    private $PrixInscription;



    function __construct($Id_Circuit, $Descriptif, $VilleDepart,$VilleArrivee,$PaysDepart,$PaysArrivee,$DateDepart,$Duree,$PrixInscription){
        $this->Id_Circuit = $Id_Circuit;
        $this->Descriptif = $Descriptif;
        $this->VilleDepart = $VilleDepart;
        $this->VilleArrivee = $VilleArrivee;
        $this->PaysDepart = $PaysDepart;
        $this->PaysArrivee = $PaysArrivee;
        $this->DateDepart = $DateDepart;
        $this->Duree = $Duree;
        $this->PrixInscription = $PrixInscription;
        
    }

    function getId_Circuit(){
        return $this->Id_Circuit;
    }
 
    function getDescriptif(){
        return $this->Descriptif;
    }
    function setDescriptif($Descriptif){
        $this->Descriptif = $Descriptif;
        
    }
    
    function getVilleDepart(){
        return $this->VilleDepart;
    }
    function setVilleDepart($VilleDepart){
        $this->VilleDepart= $VilleDepart;
        
    }
    function getVilleArrivee(){
        return $this->VilleArrivee;
    }
    function setVilleArrivee($VilleArrivee){
        $this->VilleArrivee= $VilleArrivee;      
    }   

    function getPaysDepart(){
        return $this->PaysDepart ;
    }
    function setPaysDepart($PaysDepart){
        $this->PaysDepart=$PaysDepart;
    }

    function getPaysArrivee(){
        return $this->PaysArrivee ;
    }
    function setPaysArrivee($PaysArrivee){
        $this->PaysArrivee=$PaysArrivee;
    }
    function getDateDepart(){
        return $this->DateDepart ;
    }
    function setDateDepart($DateDepart){
        $this->DateDepart=$DateDepart;
    }

    function getDuree(){
        return $this->Duree ;
    }
    function setDuree($Duree){
        $this->Duree=$Duree;
    }

    function getPrixInscription(){
        return $this->PrixInscription ;
    }
    function setPrixInscription($PrixInscription){
        $this->PrixInscription=$PrixInscription;
    }
}


    ?>