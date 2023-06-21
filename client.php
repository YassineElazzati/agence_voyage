<?php

use client as GlobalReserver;

class client {
    private $Id_Client;
    private $Nom;
    private $Prenom;
    private $DateNaissance;
    private $Telephone;
    private $Mail;

    function __construct($Id_Client, $Nom, $Prenom,$DateNaissance,$Telephone,$Mail){
        $this->$Id_Client = $Id_Client;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->DateNaissance = $DateNaissance;
        $this->Telephone = $Telephone;
        $this->Mail = $Mail;
    }

    function getId_Client(){
        return $this->Id_Client;
    }
 
    function getNom(){
        return $this->Nom;
    }
    function setNom($Nom){
        $this->Nom = $Nom;
        
    }
    
    function getPrenom(){
        return $this->Prenom;
    }
    function setPrenom($Prenom){
        $this->Prenom= $Prenom;
        
    }
    function getNom(){
        return $this->Nom;
    }
    function setNom($Nom){
        $this->Nom= $Nom;      
    }   

    function getDateNaissance(){
        return $this->DateNaissance ;
    }
    function setDateNaissance($DateNaissance){
        $this->DateNaissance=$DateNaissance;
    }

    function getTelephone (){
        return $this->Telephone  ;
    }
    function setTelephone ($Telephone ){
        $this->Telephone =$Telephone ;
    }

    function getTelephone (){
        return $this->Telephone  ;
    }
    function setTelephone ($Telephone ){
        $this->Telephone =$Telephone ;
    }

    function getMail(){
        return $this->Mail ;
    }
    function setMail($Mail){
        $this->Mail=$Mail;
    }
}


    ?>