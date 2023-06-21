<?php

use utilisateur as GlobalReserver;

class utilisateur {
    private $Id_Utilisateur  ;
    private $login;
    private $Mdp;





    function __construct($Id_Utilisateur  , $login, $Mdp,$DateEtape,$Duree){
        $this->$Id_Utilisateur   = $$Id_Utilisateur  ;
        $this->login = $login;
        $this->Mdp = $Mdp;


        
    }

    function getId_Utilisateur  (){
        return $this->Id_Utilisateur  ;
    }
 
    function getlogin(){
        return $this->login;
    }
    function setlogin($login){
        $this->login = $login;
        
    }
    
    function getMdp(){
        return $this->Mdp;
    }
    function setMdp($Mdp){
        $this->Mdp= $Mdp;
        
    }

}


    ?>