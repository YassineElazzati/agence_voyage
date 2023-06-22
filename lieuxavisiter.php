
<?php

use lieuxavisiter as GlobalReserver;

class lieuxavisiter {
    private $NomLieu  ;
    private $Ville;
    private $Pays;
    private $Descriptif;
    private $PrixVisite;




    function __construct($NomLieu  , $Ville, $Pays,$Descriptif,$PrixVisite){
        $this->$NomLieu   = $$NomLieu  ;
        $this->Ville = $Ville;
        $this->Pays = $Pays;
        $this->Descriptif = $Descriptif;
        $this->PrixVisite = $PrixVisite;

        
    }

    function getNomLieu  (){
        return $this->NomLieu  ;
    }
 
    function getVille(){
        return $this->Ville;
    }
    function setVille($Ville){
        $this->Ville = $Ville;
        
    }
    
    function getPays(){
        return $this->Pays;
    }
    function setPays($Pays){
        $this->Pays= $Pays;
        
    }
    function getDescriptif(){
        return $this->Descriptif;
    }
    function setDescriptif($Descriptif){
        $this->Descriptif= $Descriptif;      
    }   

    function getPrixVisite(){
        return $this->PrixVisite ;
    }
    function setPrixVisite($PrixVisite){
        $this->PrixVisite=$PrixVisite;
    }


}


    ?>