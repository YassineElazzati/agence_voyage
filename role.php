<?php

use role as GlobalReserver;

class role {
    private $Id_Role ;
    private $Designation;
   

    function __construct($Id_Role   , $Designation){
    $this->$Id_Role = $$Id_Role;
    $this->Designation = $Designation;
    }

    function getId_Role (){
    return $this->Id_Role   ;
    }
 
    function getDesignation(){
    return $this->Designation;
    }
    function setDesignation($Designation){
    $this->Designation = $Designation;
        
    }
}
    ?>