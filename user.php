<?php

use user as GlobalReserver;

class user {
    private $Id_Utilisateur  ;
    private $login;
    private $Mdp;





    function __construct($Id_Utilisateur  , $login, $Mdp){
        $this->Id_Utilisateur=$Id_Utilisateur;
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