

<?php

use etape as GlobalReserver;

class etape {
    private $Id_Etape ;
    private $IdentifiantCircuit;
    private $Ordre;
    private $DateEtape;
    private $Duree;




    function __construct($Id_Etape , $IdentifiantCircuit, $Ordre,$DateEtape,$Duree){
        $this->$Id_Etape  = $$Id_Etape ;
        $this->IdentifiantCircuit = $IdentifiantCircuit;
        $this->Ordre = $Ordre;
        $this->DateEtape = $DateEtape;
        $this->Duree = $Duree;

        
    }

    function getId_Etape (){
        return $this->Id_Etape ;
    }
 
    function getIdentifiantCircuit(){
        return $this->IdentifiantCircuit;
    }
    function setIdentifiantCircuit($IdentifiantCircuit){
        $this->IdentifiantCircuit = $IdentifiantCircuit;
        
    }
    
    function getOrdre(){
        return $this->Ordre;
    }
    function setOrdre($Ordre){
        $this->Ordre= $Ordre;
        
    }
    function getDateEtape(){
        return $this->DateEtape;
    }
    function setDateEtape($DateEtape){
        $this->DateEtape= $DateEtape;      
    }   

    function getDuree(){
        return $this->Duree ;
    }
    function setDuree($Duree){
        $this->Duree=$Duree;
    }


}


    ?>